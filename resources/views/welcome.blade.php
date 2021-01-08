@extends('layouts.app')
@section ('home')
    <div class="col d-lg-table-row">
        <img src="{{ asset('img/home.jpg') }}" alt="home" class="d-flex w-100 mr-auto ml-auto">
            
    </div>
    <br><br>

  <section>
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
        </div>
    </div>
</section>
@endsection
