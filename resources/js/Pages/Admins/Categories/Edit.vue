<template>
    <Layout>
        <div class="col-2">
            <Link :href="route('admin.category.index')" class="btn btn-primary my-2 block" >Вернуться назад</Link>
        </div>
        <form @submit.prevent="update">
            <div class="card-body">
                <div class="form-group">
                    <label for="exampleInputName">Name</label>
                    <input type="text" class="form-control" :class="{'border-red-500': form.errors.title}" id="exampleInputName" v-model="form.title" name="name" placeholder="Enter name">
                    <div class="text-red-500 mt-2" v-if="form.errors.title">{{form.errors.title}}</div>
                </div>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary bg-blue-600">Update</button>
            </div>
        </form>
        <div v-if="form.isDirty" class="text-blue-500 p-10">Что-то изменилось, не забудте сохранить форму</div>
    </Layout>
</template>

<script>
import Layout from  '@/Layouts/Admin'
import {Link, useForm} from "@inertiajs/inertia-vue3";
export default {
    props: {
        category: Object
    },
    components: {
        Link
    },
    layout: Layout,
    setup(props) {
        const form = useForm({
            title: props.category.title,
        });
        function update(){
            form.put(route('admin.category.update', props.category.id))
        }
        return {form, update};
    },



}
</script>


<style scoped>

</style>
