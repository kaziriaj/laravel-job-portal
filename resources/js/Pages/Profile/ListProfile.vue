<template>
    <AppLayout>
        <div class="bg-light min-vh-100 py-5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <div
                            class="card shadow-sm border-0 rounded-4 mb-4 position-relative"
                        >
                            <button
                                class="btn btn-sm btn-light border position-absolute top-0 end-0 m-3 rounded-circle"
                                title="Edit Profile"
                            >
                                <i class="bi bi-pencil-square text-primary"></i>
                            </button>

                            <div class="card-body text-center pt-5">
                                <div
                                    class="position-relative d-inline-block mb-3"
                                >
                                    <img
                                        src="https://via.placeholder.com/150"
                                        class="rounded-circle img-thumbnail shadow-sm"
                                        style="
                                            width: 140px;
                                            height: 140px;
                                            object-fit: cover;
                                        "
                                        alt="User Profile"
                                    />
                                </div>
                                <h4 class="fw-bold text-dark mb-1">
                                    {{ users.name }}
                                </h4>
                                <p class="text-muted small">
                                    IT Professional & Web Developer
                                </p>

                                <div
                                    class="d-flex justify-content-center gap-2 mt-3"
                                >
                                    <button
                                        class="btn btn-primary btn-sm px-4 rounded-pill"
                                    >
                                        Download CV
                                    </button>
                                </div>
                            </div>
                        </div>
                        <Skill :skills="skills" :user="user" />
                    </div>

                    <div class="col-lg-8">
                        <Summary />

                        <Workexperience />

                        <Education />
                    </div>
                </div>
            </div>
        </div>
    </AppLayout>
</template>
<script setup>
import AppLayout from "../../Layouts/AppLayout.vue";
import Skill from "../Components/ProfileComponents/Skill.vue";
import Summary from "../Components/ProfileComponents/Summary.vue";
import Workexperience from "../Components/ProfileComponents/Workexperience.vue";
import Education from "../Components/ProfileComponents/Education.vue";
defineProps({
    users: Object,
    skills: Array,
});
</script>
<style scoped>
/* সফট কালার এবং স্টাইল */
.bg-soft-primary {
    background-color: rgba(13, 110, 253, 0.08);
}

.btn-xs {
    padding: 1px 5px;
    font-size: 12px;
}

.card {
    transition: all 0.3s ease;
}

.group-item:hover {
    background-color: #f8f9fa;
    border-radius: 8px;
}

.cursor-pointer {
    cursor: pointer;
}

.leading-relaxed {
    line-height: 1.7;
}

/* আইকনগুলো সুন্দর দেখানোর জন্য */
.bi {
    vertical-align: middle;
}
</style>
