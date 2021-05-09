@extends('layouts.shared.table')
@section('content-table')
    <div class="QA_table mb_30">
        <!-- table-responsive -->
        <table class="table lms_table_active ">
            <thead>
            <tr>
                <th scope="col">title</th>
                <th scope="col">Category</th>
                <th scope="col">Teacher</th>
                <th scope="col">Lesson</th>
                <th scope="col">Enrolled</th>
                <th scope="col">Price</th>
                <th scope="col">Status</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <th scope="row"><a href="#" class="question_content"> title here 1</a></th>
                <td>Category name</td>
                <td>Teacher James</td>
                <td>Lessons name</td>
                <td>16</td>
                <td>$25.00</td>
                <td><a href="#" class="status_btn">Active</a></td>
            </tr>
            <tr>
                <th scope="row"><a href="#" class="question_content"> title here 1</a></th>
                <td>Category name</td>
                <td>Teacher James</td>
                <td>Lessons name</td>
                <td>16</td>
                <td>$25.00</td>
                <td><a href="#" class="status_btn">Active</a></td>
            </tr>
            <tr>
                <th scope="row"><a href="#" class="question_content"> title here 1</a></th>
                <td>Category name</td>
                <td>Teacher James</td>
                <td>Lessons name</td>
                <td>16</td>
                <td>$25.00</td>
                <td><a href="#" class="status_btn">Active</a></td>
            </tr>
            <tr>
                <th scope="row"><a href="#" class="question_content"> title here 1</a></th>
                <td>Category name</td>
                <td>Teacher James</td>
                <td>Lessons name</td>
                <td>16</td>
                <td>$25.00</td>
                <td><a href="#" class="status_btn">Active</a></td>
            </tr>
            <tr>
                <th scope="row"><a href="#" class="question_content"> title here 1</a></th>
                <td>Category name</td>
                <td>Teacher James</td>
                <td>Lessons name</td>
                <td>16</td>
                <td>$25.00</td>
                <td><a href="#" class="status_btn">Active</a></td>
            </tr>
            <tr>
                <th scope="row"><a href="#" class="question_content"> title here 1</a></th>
                <td>Category name</td>
                <td>Teacher James</td>
                <td>Lessons name</td>
                <td>16</td>
                <td>$25.00</td>
                <td><a href="#" class="status_btn">Active</a></td>
            </tr>
            <tr>
                <th scope="row"><a href="#" class="question_content"> title here 1</a></th>
                <td>Category name</td>
                <td>Teacher James</td>
                <td>Lessons name</td>
                <td>16</td>
                <td>$25.00</td>
                <td><a href="#" class="status_btn">Active</a></td>
            </tr>
            <tr>
                <th scope="row"><a href="#" class="question_content"> title here 1</a></th>
                <td>Category name</td>
                <td>Teacher James</td>
                <td>Lessons name</td>
                <td>16</td>
                <td>$25.00</td>
                <td><a href="#" class="status_btn">Active</a></td>
            </tr>
            <tr>
                <th scope="row"><a href="#" class="question_content"> title here 1</a></th>
                <td>Category name</td>
                <td>Teacher James</td>
                <td>Lessons name</td>
                <td>16</td>
                <td>$25.00</td>
                <td><a href="#" class="status_btn">Active</a></td>
            </tr>
            <tr>
                <th scope="row"><a href="#" class="question_content"> title here 1</a></th>
                <td>Category name</td>
                <td>Teacher James</td>
                <td>Lessons name</td>
                <td>16</td>
                <td>$25.00</td>
                <td><a href="#" class="status_btn">Active</a></td>
            </tr>
            <tr>
                <th scope="row"><a href="#" class="question_content"> title here 1</a></th>
                <td>Category name</td>
                <td>Teacher James</td>
                <td>Lessons name</td>
                <td>16</td>
                <td>$25.00</td>
                <td><a href="#" class="status_btn">Active</a></td>
            </tr>
            </tbody>
        </table>
    </div>
@endsection
@section('js-content')
    <!-- responsive table -->
    <script src="{{asset('vendors/datatable/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('vendors/datatable/js/dataTables.responsive.min.js')}}"></script>
    <script src="{{asset('vendors/datatable/js/dataTables.buttons.min.js')}}"></script>
    <script src="{{asset('vendors/datatable/js/buttons.flash.min.js')}}"></script>
    <script src="{{asset('vendors/datatable/js/jszip.min.js')}}"></script>
    <script src="{{asset('vendors/datatable/js/pdfmake.min.js')}}"></script>
    <script src="{{asset('vendors/datatable/js/vfs_fonts.js')}}"></script>
    <script src="{{asset('vendors/datatable/js/buttons.html5.min.js')}}"></script>
    <script src="{{asset('vendors/datatable/js/buttons.print.min.js')}}"></script>

    <!-- scrollabe  -->
    <script src="{{asset('vendors/scroll/perfect-scrollbar.min.js')}}"></script>
    <script src="{{asset('vendors/scroll/scrollable-custom.js')}}"></script>
@endsection
