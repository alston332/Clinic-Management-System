@extends('layouts.admin')
@section('content')
<div class="content">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    Dashboard
                </div>

                <div class="card-body">
                    @if(session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="row">
                        <div class="{{ $settings1['column_class'] }}">
                            <div class="info-box">
                                <span class="info-box-icon bg-red" style="display:flex; flex-direction: column; justify-content: center;">
                                    <i class="fa fa-chart-line"></i>
                                </span>

                                <div class="info-box-content">
                                    <span class="info-box-text">{{ $settings1['chart_title'] }}</span>
                                    <span class="info-box-number">{{ number_format($settings1['total_number']) }}</span>
                                </div>
                                <!-- /.info-box-content -->
                            </div>
                            <!-- /.info-box -->
                        </div>
                        <div class="{{ $settings2['column_class'] }}">
                            <div class="info-box">
                                <span class="info-box-icon bg-red" style="display:flex; flex-direction: column; justify-content: center;">
                                    <i class="fa fa-chart-line"></i>
                                </span>

                                <div class="info-box-content">
                                    <span class="info-box-text">{{ $settings2['chart_title'] }}</span>
                                    <span class="info-box-number">{{ number_format($settings2['total_number']) }}</span>
                                </div>
                                <!-- /.info-box-content -->
                            </div>
                            <!-- /.info-box -->
                        </div>
                        <div class="{{ $settings3['column_class'] }}">
                            <div class="info-box">
                                <span class="info-box-icon bg-red" style="display:flex; flex-direction: column; justify-content: center;">
                                    <i class="fa fa-chart-line"></i>
                                </span>

                                <div class="info-box-content">
                                    <span class="info-box-text">{{ $settings3['chart_title'] }}</span>
                                    <span class="info-box-number">{{ number_format($settings3['total_number']) }}</span>
                                </div>
                                <!-- /.info-box-content -->
                            </div>
                            <!-- /.info-box -->
                        </div>
                        <div class="{{ $settings4['column_class'] }}">
                            <div class="info-box">
                                <span class="info-box-icon bg-red" style="display:flex; flex-direction: column; justify-content: center;">
                                    <i class="fa fa-chart-line"></i>
                                </span>

                                <div class="info-box-content">
                                    <span class="info-box-text">{{ $settings4['chart_title'] }}</span>
                                    <span class="info-box-number">{{ number_format($settings4['total_number']) }}</span>
                                </div>
                                <!-- /.info-box-content -->
                            </div>
                            <!-- /.info-box -->
                        </div>
                        {{-- Widget - latest entries --}}
                        <div class="{{ $settings5['column_class'] }}">
                            <h3>{{ $settings5['chart_title'] }}</h3>
                            <table class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        @foreach($settings5['fields'] as $field)
                                            <th>
                                                {{ ucfirst($field) }}
                                            </th>
                                        @endforeach
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse($settings5['data'] as $row)
                                        <tr>
                                            @foreach($settings5['fields'] as $field)
                                                <td>
                                                    {{ $row->{$field} }}
                                                </td>
                                            @endforeach
                                        </tr>
                                        @empty
                                        <tr>
                                            <td colspan="{{ count($settings5['fields']) }}">{{ __('No entries found') }}</td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>

                        {{-- Widget - latest entries --}}
                        <div class="{{ $settings6['column_class'] }}">
                            <h3>{{ $settings6['chart_title'] }}</h3>
                            <table class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        @foreach($settings6['fields'] as $field)
                                            <th>
                                                {{ ucfirst($field) }}
                                            </th>
                                        @endforeach
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse($settings6['data'] as $row)
                                        <tr>
                                            @foreach($settings6['fields'] as $field)
                                                <td>
                                                    {{ $row->{$field} }}
                                                </td>
                                            @endforeach
                                        </tr>
                                        @empty
                                        <tr>
                                            <td colspan="{{ count($settings6['fields']) }}">{{ __('No entries found') }}</td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>

                        <div class="{{ $settings7['column_class'] }}">
                            <div class="info-box">
                                <span class="info-box-icon bg-red" style="display:flex; flex-direction: column; justify-content: center;">
                                    <i class="fa fa-chart-line"></i>
                                </span>

                                <div class="info-box-content">
                                    <span class="info-box-text">{{ $settings7['chart_title'] }}</span>
                                    <span class="info-box-number">{{ number_format($settings7['total_number']) }}</span>
                                </div>
                                <!-- /.info-box-content -->
                            </div>
                            <!-- /.info-box -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('scripts')
@parent
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
@endsection