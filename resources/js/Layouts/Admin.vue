<template>
    <div class="wrapper">
<!--        &lt;!&ndash; Preloader &ndash;&gt;-->
<!--        <div class="preloader flex-column justify-content-center align-items-center">-->
<!--            <img class="animation__wobble" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">-->
<!--        </div>-->

        <Navbar />

        <!-- Main Sidebar Container -->
        <Sidebar />

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">Dashboard v2</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Dashboard v2</li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <section class="content">
                <p v-if="$page.props.message" class="bg-indigo-600 h-10 flex items-center text-sm font-medium text-white px-4">{{$page.props.message}}</p>
                <slot />
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
        <Footer />
    </div>
</template>
<script>
// import { Link } from '@inertiajs/inertia-vue3';
import Footer from '@/Components/Admin/Footer';
import Navbar from "@/Components/Admin/Navbar";
import Sidebar from "@/Components/Admin/Sidebar";
export default {
    components: {
        Footer, Navbar, Sidebar
    }
}
</script>
