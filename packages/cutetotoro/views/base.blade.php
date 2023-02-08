<!-- Home page -->
<!DOCTYPE html>
<html>
    @include('Pages.Header') {{-- Header --}}
<body>
    <div>
        @include('Pages.Body_Menu_Sidebar') 
    </div>
	{{-- best-seller --}}
	<div style="margin-top: 100px">
		@include('components.best-seller')
	</div>
	{{-- end-best-seller --}}

        {{-- best-seller --}}
        {{-- <div style="margin-top: 10px">
            @include('components.best-seller')
        </div> --}}
        {{-- end-best-seller --}}

    <!-- sale product -->
    <div style="margin-top: 70px">
        @include('components.sale')
    </div>
    <!-- end sale product -->

    {{-- about --}}
    <div>
        @include('components.about')
    </div>
    {{-- end-about --}}

    {{-- footer --}}
    <div>
        @include('components.footer')
    </div>
    {{-- end-footer --}}

</body>
<footer>
    <!-- footer page -->

    <!-- script -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"
        integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous">
    </script>

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

    <script language="JavaScript" type="text/javascript" src="{{ asset('js/isotope.pkgd.min.js') }}"></script>
    <script language="JavaScript" type="text/javascript">
        var $grid = $('.grid').isotope({
            itemSelector: '.grid-item',
            layoutMode: 'fitRows'
        });
        $('#filters').on('click', 'button', function() {
            var filterValue = $(this).attr('data-filter');
            // use filterFn if matches value
            // filterValue = filterFns[filterValue] || filterValue;
            $grid.isotope({
                filter: filterValue
            });
        });
        $('.button-group').each(function(i, buttonGroup) {
            var $buttonGroup = $(buttonGroup);
            $buttonGroup.on('click', 'button', function() {
                $buttonGroup.find('.is-checked').removeClass('is-checked');
                $(this).addClass('is-checked');
            });
        });
    </script>
</footer>

</html>
