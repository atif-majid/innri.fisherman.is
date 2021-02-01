<style>
    .carousel-control-next,
    .carousel-control-prev /*, .carousel-indicators */ {
        background-color: rgba(0, 0, 0, 0.1);
        width: 30px;
    }
</style>
<div class="border-secondary col-12 border">
    <table class="table table-borderless" colspan="12">
        <tbody>
        <tr>
            <td class="users-view-latest-activity" colspan="2"><strong>@if($recipe->product_number!=""){{ $recipe->product_number }} - @endif {{ $recipe->title }}</strong></td>
        </tr>
        <tr>
            <td class="users-view-latest-activity" colspan="2"><b>Ingredients</b></td>
        </tr>
        <tr>
            <td colspan="2">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped">
                        <tbody>
                            @foreach($Ingredients as $key=>$thisIngredient)
                                <tr>
                                    <th class="text-nowrap" scope="row" style="padding-top: 0.15rem !important; padding-bottom: 0.15rem !important; width: 15% !important;white-space: nowrap;">@if($thisIngredient->ing_product_number!=""){{ $thisIngredient->ing_product_number }} - @endif {{ $thisIngredient->name }}</th>
                                    <td style="padding-top: 0.15rem !important; padding-bottom: 0.15rem !important; width: 85% !important;white-space: nowrap;">{{ $thisIngredient->amount }}&nbsp;{{ $thisIngredient->unit }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </td>
        </tr>
        @foreach($Ingredients as $key=>$thisIngredient)
            @php
            /*<tr>
                <td style="padding-top: 0.15rem !important; padding-bottom: 0.15rem !important; width: 15% !important;white-space: nowrap;">{{ $thisIngredient->name }}</td>
                <td style="padding-top: 0.15rem !important; padding-bottom: 0.15rem !important; width: 85% !important;white-space: nowrap;">{{ $thisIngredient->amount }}&nbsp;{{ $thisIngredient->unit }}</td>
            </tr>*/
            @endphp
        @endforeach
        <tr>
            <td class="users-view-latest-activity"><b>Steps</b></td>
        </tr>
        @foreach($Steps as $thisStep)
            <tr>
                <td colspan="2">{!! nl2br( $thisStep->details) !!}</td>
            </tr>
        @endforeach
        @if(count($RecipePhoto)>0)
            <tr>
                <td colspan="2">
                    <section id="carousel">
                        <div class="row match-height">
                            <!-- Basic Carousel start -->
                            <div class="col-lg-6">
                                <div class="card" id="basic-carousel">
                                    <div class="card-header">
                                        <h4 class="card-title">Photos</h4>
                                    </div>
                                    <div class="card-content">
                                        <div class="card-body">
                                            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel" data-interval="false">
                                                <ol class="carousel-indicators">
                                                    @foreach($RecipePhoto as $k=>$thisPhoto)
                                                        <li data-target="#carousel-example-generic" data-slide-to="{{$k}}" @if($k==0) class="active" @endif></li>
                                                    @endforeach
                                                </ol>
                                                <div class="carousel-inner" role="listbox">
                                                    @foreach($RecipePhoto as $k=>$thisPhoto)
                                                        <div class="carousel-item @if($k==0) active @endif">
                                                            <img style="max-height: 500px !important;" src="https://innri.fisherman.is/uploads/recipes/{{$recipe->id}}/{{$thisPhoto->file_name}}">
                                                        </div>
                                                    @endforeach
                                                </div>
                                                <a class="carousel-control-prev" href="#carousel-example-generic" role="button" data-slide="prev">
                                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                    <span class="sr-only">Previous</span>
                                                </a>
                                                <a class="carousel-control-next" href="#carousel-example-generic" role="button" data-slide="next">
                                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                    <span class="sr-only">Next</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Basic Carousel And Optional Carousel End -->

                            <!-- Basic Carousel with Caption start -->
                            <div class="col-lg-6">

                            </div>
                            <!-- Basic Carousel with Caption End -->
                        </div>
                    </section>
                </td>
            </tr>
        @endif
        </tbody>
    </table>
</div>
