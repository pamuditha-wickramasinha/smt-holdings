<div id="search">
    <span class="close"></span>
    <form role="search" id="searchform" action="{{ route('search') }}" method="get" class="radius-xl">
        @csrf
        <div class="input-group">
            <input value="" name="q" type="search" placeholder="Type to search" required>
            <span class="input-group-btn">
                <button type="button" class="search-btn">
                    <i class="fa fa-search arrow-animation"></i>
                </button>
            </span>
        </div>
    </form>
</div>
