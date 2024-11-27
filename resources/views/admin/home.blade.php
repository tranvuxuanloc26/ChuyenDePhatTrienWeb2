@extends('admin.main')

@section('content')
    <div class="container">
        <h2>Doanh thu</h2>
        <form id="revenueForm" method="GET" action="{{ route('admin') }}">
            <div class="form-group row">
                <label for="dateRange" class="col-form-label col-sm-2">Chọn khoảng thời gian:</label>
                <div class="col-sm-8">
                    <input type="text" id="dateRange" name="dateRange" class="form-control">
                </div>
                <div class="col-sm-2">
                    <button type="submit" class="btn btn-primary">Xem doanh thu</button>
                </div>
            </div>
        </form>

        <div id="revenueResult" class="mt-4">
            @if (isset($revenue))
                <h3>Tổng doanh thu: {{ number_format($revenue, 0, ',', '.') }} VND</h3>
            @endif
        </div>
    </div>

    <!-- Include daterangepicker CSS and JS -->
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
@endsection

@section('scripts')
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/moment/min/moment.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>

    <script>
        $(function() {
            $('#dateRange').daterangepicker({
                locale: {
                    format: 'YYYY-MM-DD'
                },
                startDate: moment().startOf('month'),
                endDate: moment().endOf('month')
            });
        });
    </script>
@endsection
