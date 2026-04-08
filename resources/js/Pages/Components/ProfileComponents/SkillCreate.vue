<template>
    <AppLayout>
        <div class="card shadow-sm border-0 rounded-4">
            <div
                class="card-header bg-white border-bottom py-3 d-flex justify-content-between align-items-center"
            >
                <h5 class="fw-bold mb-0 text-dark">
                    <i class="bi bi-plus-circle-fill text-primary me-2"></i>Add
                    New Skill
                </h5>
                <a
                    href="#"
                    class="btn-close shadow-none"
                    aria-label="Close"
                ></a>
            </div>

            <div class="card-body p-4">
                <form @submit.prevent="skillSubmit">
                    <div class="row g-4">
                        <div class="col-md-7">
                            <label
                                class="form-label small fw-bold text-secondary"
                                >Skill Name</label
                            >
                            <div class="input-group">
                                <span
                                    class="input-group-text bg-light border-end-0 text-muted"
                                >
                                    <i class="bi bi- lightning-charge"></i>
                                </span>
                                <input
                                    type="text"
                                    class="form-control bg-light border-start-0 ps-0 shadow-none"
                                    placeholder="e.g. Laravel, Vue 3, Networking"
                                    v-model="form.title"
                                />
                            </div>
                        </div>

                        <div class="col-md-5">
                            <label
                                class="form-label small fw-bold text-secondary"
                                >Status</label
                            >
                            <select
                                class="form-select bg-light shadow-none"
                                v-model="form.status"
                            >
                                <option selected disabled>Choose status</option>
                                <option value="1" class="text-success">
                                    Published
                                </option>
                                <option value="0" class="text-danger">
                                    Unpublished
                                </option>
                            </select>
                        </div>

                        <div class="col-12">
                            <label
                                class="form-label small fw-bold text-secondary"
                                >Brief Description (Optional)</label
                            >
                            <textarea
                                class="form-control bg-light shadow-none"
                                rows="3"
                                v-model="form.description"
                                placeholder="Mention specific tools or major projects..."
                            ></textarea>
                            <div class="form-text text-muted small">
                                Describe how you've used this skill in your
                                professional career.
                            </div>
                        </div>

                        <div
                            class="col-12 mt-4 d-flex justify-content-end gap-2"
                        >
                            <button
                                type="submit"
                                class="btn btn-primary px-4 rounded-pill fw-semibold shadow-sm"
                            >
                                <i class="bi bi-check-lg me-1"></i> Save Skill
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </AppLayout>
</template>
<script setup>
import AppLayout from "../../../Layouts/AppLayout.vue";
import { useForm } from "@inertiajs/vue3";

const form = useForm({
    title: "",
    status: "",
    description: "",
});

const skillSubmit = () => {
    form.post("/employee/skill/create", {
        onSuccess: () => {
            form.reset();
        },
    });
};
</script>
<style>
.form-control:focus,
.form-select:focus {
    border-color: #0d6efd;
    background-color: #fff !important;
    box-shadow: 0 0 0 0.25rem rgba(13, 110, 253, 0.05) !important;
}

.input-group-text {
    border-color: #dee2e6;
}

.btn-primary {
    background: linear-gradient(45deg, #0d6efd, #0b5ed7);
    border: none;
}

.btn-primary:hover {
    background: linear-gradient(45deg, #0b5ed7, #0a58ca);
}
</style>
