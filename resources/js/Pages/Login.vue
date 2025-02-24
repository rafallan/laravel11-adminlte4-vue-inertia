<script setup>
import { useForm } from '@inertiajs/vue3';


const form = useForm({
    email: '',
    password: '',
});

const submit = () => {
    form.post(route('authenticate'), {
        onSuccess: () => form.reset()
    })
}

</script>

<template>
    <div class="login-page bg-body-secondary">
        <div class="login-box">
            <div class="login-logo">
                <a href="../index2.html"><b>Admin</b>LTE</a>
            </div>
            <!-- /.login-logo -->
            <div class="card">
                <div class="card-body login-card-body">
                    <p class="login-box-msg">Forneçe aos dados para fazer o login</p>
                    <div v-if="$page.props.flash.message" class="alert alert-danger" role="alert">
                        {{ $page.props.flash.message }}
                    </div>
                    <form method="post" @submit.prevent="submit" autocomplete="off">
                        <div class="input-group mb-3">
                            <input type="email" id="email" v-model="form.email" class="form-control"
                                placeholder="Email" />
                            <div class="input-group-text"><span class="bi bi-envelope"></span></div>
                        </div>
                        <div v-if="form.errors.email" class="text-danger">
                            {{ form.errors.email }}
                        </div>
                        <div class="input-group mb-3">
                            <input type="password" id="password" v-model="form.password" class="form-control"
                                placeholder="Senha" autocomplete="new-password" />
                            <div class="input-group-text"><span class="bi bi-lock-fill"></span></div>
                        </div>
                        <div v-if="form.errors.password" class="text-danger">
                            {{ form.errors.password }}
                        </div>
                        <!--begin::Row-->
                        <div class="row">
                            <div class="col-8">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" />
                                    <label class="form-check-label" for="flexCheckDefault"> Remember Me </label>
                                </div>
                            </div>
                            <!-- /.col -->
                            <div class="col-4">
                                <div class="d-grid gap-2">
                                    <button type="submit" class="btn btn-primary">Sign In</button>
                                </div>
                            </div>
                            <!-- /.col -->
                        </div>
                        <!--end::Row-->
                    </form>

                    <!-- /.social-auth-links -->
                    <p class="mb-1"><a href="forgot-password.html">I forgot my password</a></p>
                    <p class="mb-0">
                        <a href="register.html" class="text-center"> Register a new membership </a>
                    </p>
                </div>
                <!-- /.login-card-body -->
            </div>
        </div>
    </div>
</template>
