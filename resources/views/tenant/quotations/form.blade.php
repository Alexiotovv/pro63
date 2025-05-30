@extends('tenant.layouts.app')

@section('content')
    <tenant-quotations-form
        :type-user="{{json_encode(Auth::user()->type)}}"
        :sale-opportunity-id="{{json_encode($saleOpportunityId)}}"
        :configuration="{{\App\Models\Tenant\Configuration::getPublicConfig()}}"
        :auth-user="{{json_encode(Auth::user()->getDataOnlyAuthUser())}}"
    ></tenant-quotations-form>
@endsection
