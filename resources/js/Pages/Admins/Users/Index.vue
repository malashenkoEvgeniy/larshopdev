<template>
    <Layout>
        <div class="card">
        <div class="card-header">
            <h3 class="card-title">Users Table</h3>
        </div>
            <div class="col-2">
                <Link :href="route('admin.user.create')" class="btn btn-primary my-2 block" >Создать</Link>
            </div>
        <div v-if="users.total > 0">
            <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th style="width: 10px">#</th>
                        <th>Login</th>
                        <th>Email</th>
<!--                        <th >Label</th>-->
                        <th>Actions</th>
                    </tr>
                    </thead>
                        <tbody>
                            <tr v-for="user in users.data" :key="user.id">
                                <td>{{  user.id }}</td>
                                <td>{{ user.name }}</td>
                                <td>{{ user.email }}</td>
<!--                                <td><span class="badge bg-danger">55%</span></td>-->
                                <td>
                                    <Link :href="route('admin.user.edit', user.id)" class="btn btn-info btn-sm float-left mr-1">
                                        <i class="fas fa-pencil-alt"></i>
                                    </Link>

                                    <a class="btn btn-danger btn-sm"
                                                @click="destroy(user.id)">
                                            <i class="fas fa-trash-alt"></i>
                                    </a>
                                </td>
                            </tr>
                        </tbody>
                </table>
            </div>
            <Pagination :links="users.links" />


        </div>
        <div v-else class="text-center font-bold text-xl">
            Users are absent
        </div>
    </div>
    </Layout>
</template>

<script>
import Layout from  '@/Layouts/Admin'
import {Link} from "@inertiajs/inertia-vue3";
import Pagination from '@/Components/Admin/Pagination'
export default {
    props: {
        users: Array
    },
    components: {
        Pagination, Link
    },
    methods: {
        destroy(id) {
            if(confirm('Подтвердите удаление?')) {
                this.$inertia.delete(route('admin.user.destroy', id))
            }
        }
    },
    layout: Layout

}
</script>
