@extends('admin.layouts.app')

@section('title')
    Edit | {{$page->page_title}}
@endsection

@section('content')
    <div class="row">
        <x-card row-class="col-sm-12 py-3 text-center" animation="" card-title="Hero Section" button="true" button-class="btn btn-primary" button-text="Edit" modal-id="hero_section" />
        <x-card row-class="col-sm-12 py-3 text-center" animation="" card-title="Administration" button="true" button-class="btn btn-primary" button-text="Edit" modal-id="administration_section" />
        <x-card row-class="col-sm-12 py-3 text-center" animation="" card-title="Short Details" button="true" button-class="btn btn-primary" button-text="Edit" modal-id="short_details_section" />
        <x-card row-class="col-sm-12 py-3 text-center" animation="" card-title="Online Services" button="true" button-class="btn btn-primary" button-text="Edit" modal-id="online_services_section" />
        <x-card row-class="col-sm-12 py-3 text-center" animation="" card-title="FAQ" button="true" button-class="btn btn-primary" button-text="Edit" modal-id="faq_section" />

        <x-modal modal-id="short_details_section" modal-title="Short Details">
            <x-forms action="" method="POST" >
                <div class="row">
                    <h2 class="text-center"> Edit Short Details Section </h2>
                    <x-form-input name="title" label="Title" placeholder="Enter The Title" container-class="col-sm-12" />
                    <x-form-input name="Value" label="Total Value" placeholder="Amount" container-class="col-sm-12" />
                    <x-form-input type="file" name="image" label="Image" container-class="col-sm-12" />
                    <x-form-input type="button" name="submit" value="Submit" container-class="col-sm-12" class="btn btn-primary" />
                </div>
            </x-forms>
        </x-modal>

        <x-modal modal-id="online_services_section" modal-title="Online Services">
            <x-forms action="" method="POST" >
                <div class="row">
                    <h2 class="text-center"> Edit Short Online Services Section </h2>
                    <x-form-input name="title" label="Title" placeholder="Enter The Title" container-class="col-sm-12" />
                    <x-form-input name="description" label="Description" placeholder="Description" container-class="col-sm-12" />
                    <x-form-input name="btn-url" label="Button URL" placeholder="Button URL" container-class="col-sm-12" />
                    <x-form-input name="btn-txt" label="Button Text" placeholder="Button Text" container-class="col-sm-12" />
                    <x-form-input type="file" name="image" label="Image" container-class="col-sm-12" />
                    <x-form-input type="button" name="submit" value="Submit" container-class="col-sm-12" class="btn btn-primary" />
                </div>
            </x-forms>
        </x-modal>

        <x-modal modal-id="faq_section" modal-title="FAQ" >
            <x-forms action="" method="POST" >
                <div class="row">
                    <h2 class="text-center"> Edit FAQ</h2>
                    <x-form-input name="title" label="Question Title" placeholder="Feel free to ask" container-class="col-sm-12" />
                    <x-form-input name="description" label="Description" placeholder="Question Description" container-class="col-sm-12" />
                    <x-form-input type="button" name="submit" value="Submit" container-class="col-sm-12" class="btn btn-primary" />
                </div>
            </x-forms>
        </x-modal>
    </div>
@endsection
