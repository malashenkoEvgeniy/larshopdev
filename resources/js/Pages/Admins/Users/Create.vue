<template>
    <Layout>
        <div class="col-2">
            <Link :href="route('admin.user.index')" class="btn btn-primary my-2 block" >Вернуться назад</Link>
        </div>
        <form @submit.prevent="store">
            <div class="card-body">
                <div class="form-group">
                    <label for="exampleInputName">Name</label>
                    <input type="text" class="form-control" :class="{'border-red-500': form.errors.name}" id="exampleInputName" v-model="form.name" name="name" placeholder="Enter name">
                    <div class="text-red-500 mt-2" v-if="form.errors.name">{{form.errors.name}}</div>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" :class="{'border-red-500': form.errors.email}" id="exampleInputEmail1" name="email" v-model="form.email" placeholder="Enter email">
                    <div class="text-red-500 mt-2" v-if="form.errors.email">{{form.errors.email}}</div>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" :class="{'border-red-500': form.errors.password}"  id="exampleInputPassword1" name="password" v-model="form.password" placeholder="Password">
                    <div class="text-red-500 mt-2" v-if="form.errors.password">{{form.errors.password}}</div>
                </div>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary bg-blue-600">Submit</button>
            </div>
        </form>
        <div v-if="form.isDirty" class="text-blue-500 p-10">Что-то изменилось, не забудте сохранить форму</div>
    </Layout>
</template>

<script>
import Layout from  '@/Layouts/Admin'
import {Link, useForm} from "@inertiajs/inertia-vue3";
export default {
    components: {
        Link
    },
    layout: Layout,
    setup() {
        const form = useForm({
            name: null,
            email: null,
            password: null
        });
        function store(){
            form.post(route('admin.user.store'))
        }
        return {form, store};
    },



}
</script>


<style scoped>

</style>
