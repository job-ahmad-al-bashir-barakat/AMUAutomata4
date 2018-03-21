@extends('admin::layouts.layout')

@section('content_header')
    @include('admin::layouts._content_header' ,['title' => $title])
@endsection

@section('content')
    <button class="btn btn-default" data-target="#myname" data-toggle="modal" data-form-add>Add</button>
    <button class="btn btn-default" data-target="#myname" data-toggle="modal" data-form-update>Update</button>
@stop

@section('footer')
{{ FormComponent::modalOpen('myname') }}
    {{ FormComponent::formOpen() }}

        {{ FormComponent::modalHeaderOpen('dsa') }}
        {{ FormComponent::modalHeaderClose() }}

        {{ FormComponent::modalBodyOpen() }}
            {{ FormComponent::fill('ahmed')->primarykey('pk','',1) }}
            {{ FormComponent::fill('sss')->text('My Name','my','my','fofo') }}
            <p>
                Sed porttitor lectus nibh. Donec rutrum congue leo eget malesuada. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Nulla porttitor accumsan tincidunt. Nulla porttitor accumsan tincidunt. Curabitur aliquet quam id dui posuere blandit. Curabitur aliquet quam id dui posuere blandit. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi.

                Proin eget tortor risus. Nulla porttitor accumsan tincidunt. Donec rutrum congue leo eget malesuada. Donec rutrum congue leo eget malesuada. Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Pellentesque in ipsum id orci porta dapibus. Proin eget tortor risus. Curabitur aliquet quam id dui posuere blandit.

                Vivamus suscipit tortor eget felis porttitor volutpat. Proin eget tortor risus. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Nulla quis lorem ut libero malesuada feugiat. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Pellentesque in ipsum id orci porta dapibus. Nulla quis lorem ut libero malesuada feugiat.

                Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Nulla porttitor accumsan tincidunt. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Cras ultricies ligula sed magna dictum porta.
            </p>
        {{ FormComponent::modalBodyClose() }}

        {{ FormComponent::modalFooterOpen() }}
            {{ FormComponent::formAjaxButtons() }}
        {{ FormComponent::modalFooterClose() }}

    {{ FormComponent::formClose() }}
{{ FormComponent::modalClose() }}
@endsection