<?php

namespace App\Http\Controllers\Api;
use App\Mail\SendOtpMail;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\RegisterRequest;
use App\Http\Requests\VerifyOtpRequest;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\UpdateProfileRequest;
use App\Models\User;
use App\Models\Otp;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    //rgister
    public function register(RegisterRequest $request)
    {
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'is_verified' => false,
        ]);

        $otp = rand(100000, 999999);

        Otp::create([
            'user_id' => $user->id,
            'otp' => $otp,
            'type' => 'registration',
            'expires_at' => now()->addMinutes(10),
            'is_used' => false,
        ]);

        // Mail::to($user->email)->send(new SendOtpMail($otp, $user->name));

        return response()->json(
            [
                'success' => true,
                'message' => 'User registered successfully. OTP generated.',
                'otp' => $otp,
            ],
            201,
        );
    }

    //verify-otp
    public function verifyOtp(VerifyOtpRequest $request)
    {
        $user = User::where('email', $request->email)->first();

        $otpRecord = Otp::where('user_id', $user->id)->where('type', 'registration')->latest()->first();

        if (!$otpRecord) {
            return response()->json(
                [
                    'success' => false,
                    'message' => 'OTP not found.',
                ],
                404,
            );
        }

        if ($otpRecord->is_used) {
            return response()->json(
                [
                    'success' => false,
                    'message' => 'OTP has already been used.',
                ],
                400,
            );
        }

        if ($otpRecord->otp != $request->otp) {
            return response()->json(
                [
                    'success' => false,
                    'message' => 'Invalid OTP.',
                ],
                400,
            );
        }

        if (now()->gt($otpRecord->expires_at)) {
            return response()->json(
                [
                    'success' => false,
                    'message' => 'OTP has expired.',
                ],
                400,
            );
        }

        $otpRecord->update([
            'is_used' => true,
        ]);

        $user->update([
            'is_verified' => true,
        ]);

        return response()->json([
            'success' => true,
            'message' => 'OTP verified successfully. Account activated.',
        ]);
    }

    //login
    public function login(LoginRequest $request)
    {
        $user = User::where('email', $request->email)->first();

        if (!$user) {
            return response()->json(
                [
                    'success' => false,
                    'message' => 'Invalid credentials.',
                ],
                401,
            );
        }

        if (!$user->is_verified) {
            return response()->json(
                [
                    'success' => false,
                    'message' => 'Please verify your account first.',
                ],
                403,
            );
        }

        if (!Hash::check($request->password, $user->password)) {
            return response()->json(
                [
                    'success' => false,
                    'message' => 'Invalid credentials.',
                ],
                401,
            );
        }

        $token = $user->createToken('auth_token')->plainTextToken;

        return response()->json([
            'success' => true,
            'message' => 'Login successful.',
            'token' => $token,
            'user' => $user,
        ]);
    }

    public function logout(Request $request)
    {
        $request->user()->currentAccessToken()->delete();

        return response()->json([
            'success' => true,
            'message' => 'Logged out successfully.',
        ]);
    }

    //get profile
    public function profile(Request $request)
    {
        return response()->json([
            'success' => true,
            'user' => $request->user(),
        ]);
    }

    //update profile
    public function updateProfile(UpdateProfileRequest $request)
    {
        $user = $request->user();

        $user->update([
            'name' => $request->name,
        ]);

        return response()->json([
            'success' => true,
            'message' => 'Profile updated successfully.',
            'user' => $user,
        ]);
    }
}
