<template>
    <div class="d-flex align-items-center justify-content-center vh-100">
        <div class="card shadow-lg" style="width: 360px">
            <div class="card-body">
                <h3 class="text-center mb-4">Sign In</h3>
                <form>
                    <!-- Email -->
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <div class="input-group">
                            <span class="input-group-text"
                                ><i class="bi bi-envelope"></i
                            ></span>
                            <input
                                type="email"
                                id="email"
                                class="form-control"
                                placeholder="Enter email"
                                required
                            />
                        </div>
                    </div>

                    <!-- Password -->
                    <div class="mb-3">
                        <label for="password" class="form-label"
                            >Password</label
                        >
                        <div class="input-group">
                            <span class="input-group-text"
                                ><i class="bi bi-lock"></i
                            ></span>
                            <input
                                type="password"
                                id="password"
                                class="form-control"
                                placeholder="Enter password"
                                required
                            />
                        </div>
                    </div>

                    <!-- Remember Me -->
                    <div class="form-check mb-3">
                        <input
                            class="form-check-input"
                            type="checkbox"
                            id="remember"
                        />
                        <label class="form-check-label" for="remember"
                            >Remember Me</label
                        >
                    </div>

                    <!-- Submit -->
                    <button type="submit" class="btn btn-primary w-100">
                        Login
                    </button>
                </form>

                <!-- Extra Links -->
                <div class="mt-3 text-center">
                    <a href="#">Forgot Password?</a>
                </div>
                <div class="mt-2 text-center">
                    <Link href="/register">Register a new account</Link>
                </div>
            </div>
        </div>
    </div>
</template>
<script setup>
import { Link } from "@inertiajs/vue3";
</script>
