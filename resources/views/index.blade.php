@extends('layouts.app')

@section('content')
<style>
    body {
        background: #212529 !important;
    }
    .centered-text {
        min-height: 80vh;
        display: flex;
        align-items: center;
        justify-content: center;
    }
    .mini-crm-title {
        color: #fff;
        background: linear-gradient(90deg, #0d6efd 0%, #00ffe7 100%);
        padding: 40px 80px;
        border-radius: 20px;
        font-size: 3rem;
        font-weight: bold;
        letter-spacing: 0.2em;
        box-shadow: 0 4px 24px rgba(0,0,0,0.3);
        text-align: center;
    }
</style>
<div class="container centered-text">
    <div class="mini-crm-title">
        Mini CRM System
    </div>
</div>
@endsection