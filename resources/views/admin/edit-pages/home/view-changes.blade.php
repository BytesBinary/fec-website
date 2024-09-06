@extends('admin.layouts.app')

@section('title')
    Edit - Home Page
@endsection

@section('style')
    @vite(['resources/css/home.css', 'resources/js/home.js'])
@endsection

@section('content')
    <x-admin.page-title title="Edit Home Page" />
    <x-breadcrumbs :breadcrumbs="[
        'Dashboard' => route('admin.dashboard'),
        'Pages' => route('admin.pages'),
        'Edit Home' => route('admin.page.view',['slug'=>'home']),
    ]" />
    <div>
        <a href="{{route('admin.pages.edit',['slug'=>'home','section'=>'hero_section'])}}">
            <button class="btn btn-primary my-3 edit-section-btn">
                Click To Edit Hero Section
            </button>
            @include('pages.home.hero')
        </a>
        <a href="{{route('admin.pages.edit',['slug'=>'home','section'=>'administration_section'])}}">
            <button class="btn btn-primary my-3 edit-section-btn">
                Click To Edit Administration Section
            </button>
            @include('pages.home.administration-section')
        </a>
        <a href="{{route('admin.pages.edit',['slug'=>'home','section'=>'short_details_section'])}}">
            <button class="btn btn-primary my-3 edit-section-btn">
                Click To Edit Short Details Section
            </button>
            @include('pages.home.short-details')
        </a>
        <a href="{{route('admin.pages.edit',['slug'=>'home','section'=>'online_services_section'])}}">
            <button class="btn btn-primary my-3 edit-section-btn">
                Click To Edit Online Services Section
            </button>
            @include('pages.home.online-services')
        </a>
        <a href="{{route('admin.pages.edit',['slug'=>'home','section'=>'faq_section'])}}">
            <button class="btn btn-primary my-3 edit-section-btn">
                Click To Edit Online Services Section
            </button>
            @include('pages.home.faq')
        </a>
    </div>
@endsection

<x-modal modal-id="home" modal-title="Sections" >
    <x-card row-class="col-sm-12 py-3 text-center" link="{{route('admin.pages.edit',['slug'=>'home','section'=>'hero_section'])}}" card-title="Hero Section" button="true" button-class="btn btn-primary" button-text="Edit" modal-id="hero_section" />
    <x-card row-class="col-sm-12 py-3 text-center" link="{{route('admin.pages.edit',['slug'=>'home','section'=>'administration_section'])}}" card-title="Administration" button="true" button-class="btn btn-primary" button-text="Edit" modal-id="administration_section" />
    <x-card row-class="col-sm-12 py-3 text-center" link="{{route('admin.pages.edit',['slug'=>'home','section'=>'short_details_section'])}}" card-title="Short Details" button="true" button-class="btn btn-primary" button-text="Edit" modal-id="short_details_section" />
    <x-card row-class="col-sm-12 py-3 text-center" link="{{route('admin.pages.edit',['slug'=>'home','section'=>'online_services_section'])}}" card-title="Online Services" button="true" button-class="btn btn-primary" button-text="Edit" modal-id="online_services_section" />
    <x-card row-class="col-sm-12 py-3 text-center" link="{{route('admin.pages.edit',['slug'=>'home','section'=>'faq_section'])}}" card-title="FAQ" button="true" button-class="btn btn-primary" button-text="Edit" modal-id="faq_section" />
</x-modal>
