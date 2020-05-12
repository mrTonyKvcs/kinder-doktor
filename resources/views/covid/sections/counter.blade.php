
<section class="counter type_one pdt_30 pdb_30">
    <div class="container">
        <div class="row">
            <!---------row----------->
            <div class="col-lg-6 col-md-12">
                <!---------col----------->
                <div class="heading white tp_one">
                    <h6>Magyarország</h6>
                    <h1>Koronavírus járvány</h1>
                    <p>Forrás: Nemzeti Népegészségügyi Központ</p>
                    {{--<p>Legutolsó frissítés dátuma: 2020.04.28. 07:16</p>--}}
                </div>
                <!---------col-end---------->
            </div>
            <div class="col-lg-6 col-md-12 d-flex">
                <!---------col----------->
                <div class="counter_box_outer">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="counter_box type_one">
                                <h2><span class="odometer " data-count="{{$data[3]}}"></span></h2>
                                <h6>Mintavétel</h6>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="counter_box type_one">
                                <h2><span class="odometer " data-count="{{$data[0]}}"></span></h2>
                                <h6>Fertőzött</h6>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="counter_box type_one">
                                <h2><span class="odometer " data-count="{{$data[1]}}"></span></h2>
                                <h6>Gyógyult</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <!---------col-end---------->
            </div>
            <!----------row-end---------->
        </div>
    </div>
</section>
