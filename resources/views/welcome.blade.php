@extends('layouts.app')
@section ('home')
<div class="slider">
    <ul>
        <li>
            <img src="{{ asset('img/home.jpg') }}" alt="home" >
        </li>
        <li>
            <img src="{{ asset('img/survey.jpg') }}" alt="home">
        </li>
        <li>
            <img src="{{ asset('img/home.jpg') }}" alt="home" >
        </li>
        <li>
            <img src="{{ asset('img/survey.jpg') }}" alt="home" class="d-flex w-100 mr-auto ml-auto">
        </li>
    </ul>
</div>
<!-- final del slider -->
 <br><br><br>
    <div class="container">
        <div class="modal-body row">
            <div class="col-md-6 text-center">
                <h4> Conoce mas sobre nosotros</h4>
                <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio vero nulla, maiores consectetur dolore sunt sint harum obcaecati corrupti magnam. Non hic quidem cumque rerum, inventore in exercitationem nihil illo.</p>
            </div>
            <div class="col-md-6 text-center">
                <h4> Nuestros visitantes</h4>
                <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium distinctio nulla quidem! Voluptate vero alias porro, incidunt vel odio totam neque veritatis, illum esse debitis quisquam consectetur quae maxime tenetur!</p>
            </div>
            <div class="col-md-6 text-center">
                <h4> Conoce mas sobre nosotros</h4>
                <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio vero nulla, maiores consectetur dolore sunt sint harum obcaecati corrupti magnam. Non hic quidem cumque rerum, inventore in exercitationem nihil illo.</p>
            </div>
            <div class="col-md-6 text-center">
                <h4> Nuestros visitantes</h4>
                <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium distinctio nulla quidem! Voluptate vero alias porro, incidunt vel odio totam neque veritatis, illum esse debitis quisquam consectetur quae maxime tenetur!</p>
            </div>
        </div>    
    </div>
<br><br><br>

 <!-- final de la primera sección del home-->
<div style="background-color: #dadee2;"> 
    <div class="container">
        <div class=" modal-body row" id="survey">
            <tarjeta-component></tarjeta-component>

        </div> <!-- final del div modal-body row -->
    </div>    <!-- final del div container -->
</div>
@endsection


<style>
.slider {
	width: 100%;
	margin: auto;
	overflow: hidden;
    height: flex;
}

.slider ul {
	display: flex;
	padding: 0;
	width: 400%;
    height: flex;
	
	animation: cambio 20s infinite alternate linear;
}

.slider li {
	width: 100%;
    height: flex;
	list-style: none;
}

.slider img {
	width: 100%;
}

@keyframes cambio {
	0% {margin-left: 0;}
	15% {margin-left: 0;}
	
	30% {margin-left: -100%;}
	45% {margin-left: -100%;}
	
	55% {margin-left: -200%;}
	65% {margin-left: -200%;}
	
	75% {margin-left: -300%;}
	100% {margin-left: -300%;}
}

</style>
