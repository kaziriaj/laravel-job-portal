<template>
    <Head title="Registration" />
    <div
        class="d-flex align-items-center justify-content-center vh-100 bg-light"
    >
        <div class="card shadow-lg" style="width: 400px">
            <div class="card-body">
                <h3 class="text-center mb-4">Register</h3>
                <form @submit.prevent="register">
                    <!-- Full Name -->
                    <div class="mb-3">
                        <label for="name" class="form-label">Full Name</label>
                        <div class="input-group">
                            <span class="input-group-text"
                                ><i class="bi bi-person"></i
                            ></span>
                            <input
                                type="text"
                                id="name"
                                class="form-control"
                                placeholder="Enter full name"
                                v-model="form.name"
                            />
                        </div>
                        <p class="text-danger">{{ form.errors.name }}</p>
                    </div>

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
                                v-model="form.email"
                            />
                        </div>
                        <p class="text-danger">{{ form.errors.email }}</p>
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
                                v-model="form.password"
                            />
                        </div>
                        <p class="text-danger">{{ form.errors.password }}</p>
                    </div>

                    <!-- Confirm Password -->
                    <div class="mb-3">
                        <label for="confirmPassword" class="form-label"
                            >Confirm Password</label
                        >
                        <div class="input-group">
                            <span class="input-group-text"
                                ><i class="bi bi-lock-fill"></i
                            ></span>
                            <input
                                type="password"
                                id="confirmPassword"
                                class="form-control"
                                placeholder="Confirm password"
                                v-model="form.password_confirmation"
                            />
                        </div>
                    </div>

                    <!-- Terms -->
                    <div class="form-check mb-3">
                        <input
                            class="form-check-input"
                            type="checkbox"
                            id="terms"
                        />
                        <label class="form-check-label" for="terms">
                            I agree to the <a href="#">terms & conditions</a>
                        </label>
                    </div>

                    <!-- Submit -->
                    <button type="submit" class="btn btn-success w-100">
                        Register
                    </button>
                </form>

                <!-- Extra Links -->
                <div class="mt-3 text-center">
                    <Link href="/login">Already have an account? Login</Link>
                </div>
            </div>
        </div>
    </div>
</template>
<script setup>
import { useForm, Head, Link } from "@inertiajs/vue3";

const form = useForm({
    name: "",
    email: "",
    password: "",
    password_confirmation: "",
});
const register = () => {
    form.post("/register");
};
</script>

<style scoped>
body {
    background-color: #f4f6f9;
}
.card {
    border-radius: 0.75rem;
}
</style>
