<template>
    <div class="d-flex flex-column vh-100">
        <!-- Header -->
        <header class="navbar navbar-dark bg-primary px-3">
            <a class="navbar-brand" href="#">My Dashboard</a>
            <div class="ms-auto text-white">
                <i class="bi bi-person-circle"></i> Admin
            </div>
        </header>

        <div class="d-flex flex-grow-1">
            <!-- Sidebar -->
            <aside class="bg-dark text-white p-3" style="width: 220px">
                <h5 class="mb-3">Menu</h5>
                <ul class="nav flex-column">
                    <li class="nav-item mb-2">
                        <a href="#" class="nav-link text-white"
                            ><i class="bi bi-speedometer2"></i> Dashboard</a
                        >
                    </li>
                    <li class="nav-item mb-2">
                        <Link
                            v-if="$page.props.auth.user.role === 'employee'"
                            href="/profile"
                        >
                            Profile
                        </Link>
                    </li>
                    <li class="nav-item mb-2">
                        <a href="#" class="nav-link text-white"
                            ><i class="bi bi-people"></i> Users</a
                        >
                    </li>
                    <li class="nav-item mb-2">
                        <a href="#" class="nav-link text-white"
                            ><i class="bi bi-gear"></i> Settings</a
                        >
                    </li>
                    <li class="nav-item mb-2">
                        <form action="">
                            <button
                                @click.prevent="logout"
                                class="dropdown-item"
                            >
                                Logout
                            </button>
                        </form>
                    </li>
                </ul>
            </aside>

            <!-- Main Content -->
            <main class="flex-grow-1 p-4 bg-light">
                <slot />
            </main>
        </div>

        <!-- Footer -->
        <footer class="bg-primary text-white text-center py-2">
            © 2026 My Dashboard. All rights reserved.
        </footer>
    </div>
</template>

<script setup>
import { router } from "@inertiajs/vue3";

const logout = () => {
    router.post("/logout");
};
</script>

<style scoped>
aside {
    min-height: calc(100vh - 56px - 40px); /* header + footer height বাদ */
}
.nav-link:hover {
    background-color: rgba(255, 255, 255, 0.1);
    border-radius: 4px;
}
</style>
