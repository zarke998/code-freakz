@extends("common.layouts.admin")

@section("title") CodeFreakz | Admin - Logs @endsection

@section("content")
    <div class="content-container my-3">
        <div class="content-section mx-3 mb-5">
            <h2 class="text-center my-4">Logs</h2>
            <div class="row log-filters align-items-center mb-2">
                <div class="col-md-6 col-lg-4 log-type-filter d-flex align-items-center">
                    <span>Log type:</span>
                    <select class="form-control cf-input cf-select" name="author" placeholder="Author" aria-label="Author" aria-describedby="basic-addon1">
                        <option value="1">All logs</option>
                    </select>
                </div>
                <div class="col-lg-6 offset-lg-2 mt-3 d-flex justify-content-lg-end justify-content-between flex-wrap date-filter">
                    <div class="mb-2"><span>Start date</span><input class="cf-input ml-2" type="date" name="log-start"/></div>
                    <div class="ml-md-3"><span>End date</span><input class="cf-input ml-3" type="date" name="log-end"/></div>
                </div>
            </div>
            <div id="log"></div>
        </div>
    </div>
@endsection

