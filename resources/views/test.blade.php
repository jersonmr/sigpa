@extends('layouts.app')

@section('content')
<div class="container">
    <form action="#" method="post" id="testform">
        <div class="form-group">
            <label for="firstname">Firstname</label>
            <input type="text" name="firstname" id="firstname" class="form-control">
        </div>
        <div class="form-group">
            <label for="lastname">Lastname</label>
            <input type="text" name="lastname" id="lastname" class="form-control">
        </div>
    </form>
    <div class="form-group">
        <process-form />
    </div>

</div>
{{-- <div id="vueform">
</div> --}}
@endsection

@section('scripts')
{{-- <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script> --}}
{{-- <script src="https://unpkg.com/axios/dist/axios.min.js"></script> --}}
<script>
    /* new Vue({
        el: '#vueform',


    }) */
</script>
@endsection
