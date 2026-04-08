<template>
    <div class="card shadow-sm border-0 rounded-4 mb-4">
        <div class="card-body">
            <div class="d-flex justify-content-between align-items-center mb-3">
                <h6 class="fw-bold mb-0">Technical Skills</h6>
                <Link
                    href="/employee/skill/create"
                    class="btn btn-outline-primary btn-xs rounded-pill px-2 py-0"
                    style="font-size: 11px"
                >
                    <i class="bi bi-plus-lg"></i> Add
                </Link>
            </div>
            <div
                class="d-flex flex-wrap gap-2"
                v-for="skill in skills"
                :key="skill.id"
            >
                <span
                    class="badge bg-soft-primary text-primary border border-primary-subtle px-3 py-2 rounded-pill position-relative group"
                >
                    {{ skill.title }}
                    <i class="bi bi-x-circle ms-1 cursor-pointer"></i>
                </span>
            </div>
        </div>
    </div>
</template>
<script setup>
import { Link } from "@inertiajs/vue3";

Link;
defineProps({
    user: Object,
    skills: Array,
});
</script>
