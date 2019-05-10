@include('layout/header')

<h1>{{$pageTitle}}</h1>
<div class="container">
    <h2>Nieuwe Film</H2>
</div>
<div class="container">
    <form action="{{route('addMovie')}}" method="post">
        {{csrf_field()}}
    <input type="text" name="title">
    <input type="text" name="jaar">
    <input type="submit" value="Save">
    </form>
</div>


@include('layout/footer')




