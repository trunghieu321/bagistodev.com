<div class="categorie-search-box">
    <form action="#">
        <div class="form-group">
            <select class="bootstrap-select" name="poscats">
                @if(!empty($categories))
                    <option value="0">All categories</option>
                    @foreach($categories as $keyCate => $valCate)
                        @if($valCate->parent_id == null)
                            <option value="{{$keyCate['id']}}">{{$valCate['name']}}</option>
                        @endif
                    @endforeach
                @endif
            </select>
        </div>
        <input type="text" name="search" placeholder="Search">
        <button><i class="lnr lnr-magnifier"></i></button>
    </form>
</div>