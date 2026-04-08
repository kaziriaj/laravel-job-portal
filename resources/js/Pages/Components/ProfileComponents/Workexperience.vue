<template>
    <div class="card shadow-sm border-0 rounded-4 mb-4">
        <div class="card-body p-4">
            <div
                class="d-flex justify-content-between align-items-center border-bottom pb-2 mb-4"
            >
                <h5 class="fw-bold mb-0">Work Experience</h5>
                <button class="btn btn-primary btn-sm rounded-pill px-3">
                    <i class="bi bi-plus-circle me-1"></i>
                    Add Experience
                </button>
            </div>

            <div class="d-flex mb-4 group-item">
                <div class="flex-shrink-0">
                    <div class="bg-primary-subtle text-primary rounded-3 p-3">
                        <i class="bi bi-briefcase fs-4"></i>
                    </div>
                </div>
                <div class="ms-3 flex-grow-1">
                    <div
                        class="d-flex justify-content-between align-items-start"
                    >
                        <h6 class="fw-bold mb-1">Senior IT Engineer</h6>
                        <div>
                            <button
                                class="btn btn-sm btn-link text-muted p-0 me-2"
                            >
                                <i class="bi bi-pencil text-primary"></i>
                            </button>
                            <button class="btn btn-sm btn-link text-muted p-0">
                                <i class="bi bi-trash text-danger"></i>
                            </button>
                        </div>
                    </div>
                    <div class="text-primary small fw-semibold">
                        Global Tech Ltd. | 2021 - Present
                    </div>
                    <p class="text-muted small mt-2">
                        Server management and Laravel development.
                    </p>
                </div>
            </div>
        </div>
    </div>
</template>
