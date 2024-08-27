@extends('layout.master')
@section('css')
<style>
 .enquiry-section{padding: 50px 0px;}
</style>

@stop

@section('body')
    <section class="slider-section">
        <img src="{{ asset('assets/images/sliders/creta.webp') }}" class="d-block w-100" alt="...">
    </section>
    <section class="enquiry-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <form>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Name</label>
                            <input type="text" class="form-control" placeholder="Name">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Email address</label>
                            <input type="email" class="form-control" placeholder="Email">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Mobile No.</label>
                            <input type="text" class="form-control" placeholder="Mobile Number">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Model Interested In*</label>
                            <select class="form-control" id="car" name="model" aria-label="Select Model" aria-labelledby="car">
                                <option disabled="" selected="selected" value="">Model</option>
                                <option value="24">New Grand i10 NIOS</option>
                                <option value="39">All New i20</option>
                                <option value="41">i20 N Line</option>
                                <option value="35">AURA</option>
                                <option value="45">All new Verna</option>
                                <option value="18">New Venue</option>
                                <option value="37">New Creta</option>
                                <option value="40">Alcazar</option>
                                <option value="46">EXTER</option>
                                <option value="42">New Tucson</option>
                                <option value="43">Venue N Line</option>
                                <option value="47">Creta N Line</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
@stop