<template>
    <Layout>
        <div class="card">
        <div class="card-header">
            <h3 class="card-title">Categories Table</h3>
        </div>
            <div class="col-2">
                <Link :href="route('admin.category.create')" class="btn btn-primary my-2 block" >Создать</Link>
            </div>
        <div v-if="categories.total > 0">
            <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th style="width: 10px">#</th>
                        <th>Title</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                        <tbody>
                            <tr v-for="category in categories.data" :key="category.id">
                                <td>{{  category.id }}</td>
                                <td>{{ category.title }}</td>
                                <td>
                                    <Link :href="route('admin.category.edit', category.id)" class="btn btn-info btn-sm float-left mr-1">
                                        <i class="fas fa-pencil-alt"></i>
                                    </Link>

                                    <a class="btn btn-danger btn-sm"
                                                @click="destroy(category.id)">
                                            <i class="fas fa-trash-alt"></i>
                                    </a>
                                </td>
                            </tr>
                        </tbody>
                </table>
            </div>
            <Pagination :links="categories.links" />


        </div>
        <div v-else class="text-center font-bold text-xl">
            Categories are absent
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
        categories: Array
    },
    components: {
        Pagination, Link
    },
    methods: {
        destroy(id) {
            if(confirm('Подтвердите удаление?')) {
                this.$inertia.delete(route('admin.category.destroy', id))
            }
        }
    },
    layout: Layout

}
</script>
