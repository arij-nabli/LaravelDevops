@extends('Layouts.frontend')

@section('content')
<section id="services-section" class="services-two">
    <div class="container">
        <div class="section-title text-center">
            <h2 class="section-title__title">Our Recycling Centers</h2>
            <a href="{{ url('centre-recyclage/create') }}" class="thm-btn">Add a Recycling Center</a>
        </div>
        <div class="row">
            @foreach ($centres as $centre)
                <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                    <!-- Recycling Center Card -->
                    <div class="services-two__single">
                        <div class="services-two__content-box">
                            <div class="services-two__icon">
                            <img src="images/services-2-icon-4.png" alt="">
                            </div>
                            <div class="services-two__content">
                                <h3 class="services-two__title">
                                    <a href="{{ route('centre-recyclage.show', $centre->id) }}">{{ $centre->name }}</a>
                                </h3>
                                <p class="services-two__text"><strong>Address:</strong> {{ $centre->address }}</p>
                                <p class="services-two__text"><strong>Material Type:</strong> {{ $centre->material_type }}</p>
                                <p class="services-two__text"><strong>Capacity:</strong> {{ $centre->capacity }}</p>
                                <p class="services-two__text"><strong>Number of Employees:</strong> {{ $centre->number_of_employees }}</p>
                            </div>
                        </div>
                        <div class="team-one__social" style="display: flex; justify-content: space-between; align-items: center;">
                            <a href="{{ route('centre-recyclage.edit', $centre->id) }}" class="btn btn-success btn-sm" style="width: 40px; height: 40px; display: flex; justify-content: center; align-items: center;">
                                <i class="fa fa-edit" style="font-size: 20px;"></i> 
                            </a>
                            
                            <form action="{{ route('centre-recyclage.destroy', $centre->id) }}" method="POST" class="d-inline">
                                @csrf 
                                @method('DELETE')  
                                <button type="submit" class="btn btn-danger btn-sm" style="width: 40px; height: 40px; display: flex; justify-content: center; align-items: center;" onclick="return confirm('Are you sure you want to delete this center?');">
                                    <i class="fa fa-trash" style="font-size: 20px;"></i> <!-- Delete icon only -->
                                </button>
                            </form>
                        </div>

                        <div class="services-two__read-more">
                            <a href="{{ route('centre-recyclage.show', $centre->id) }}">
                                <span>See More</span>
                                <i class="fa fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        {{ $centres->links() }} <!-- Pagination if necessary -->
    </div>
</section>
@endsection
