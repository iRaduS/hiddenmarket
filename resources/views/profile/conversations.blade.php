@extends('master.profile')

@section('profile-content')
    @include('includes.flash.error')
    @include('includes.flash.success')
    @include('includes.validation')


    <h1 class="my-3">Private Messages</h1>
    <hr>
    <div class="row justify-content-center">
        <div class="col-md-12">

            <h3 class="mb-3">Conversations</h3>

            @if($usersConversations -> isNotEmpty())
                <a href="{{ route("profile.messages") }}" class="btn btn-dark">
                    <i class="fa fa-user-plus"></i>
                    New Conversation
                </a>
                <div class="list-group mt-3 mb-3">
                    @foreach($usersConversations as $conversationItem)
                        <a href="{{ route('profile.messages', $conversationItem) }}"
                           class="list-group-item p-2 d-flex justify-content-between list-group-item-action">
                            {{ $conversationItem -> otherUser() -> username }}

                        <span class="d-flex">
                                @if($conversationItem -> unreadMessages() > 0)
                                    <span class="badge badge-warning d-flex align-items-center mx-1 badge-pill">Unread: {{ $conversationItem -> unreadMessages() }}</span>
                                @endif
                                <span class="badge badge-light d-flex mx-1 align-items-center badge-pill">Total messages: {{ $conversationItem -> messages() -> count() }}</span>
                                <span class="badge badge-light d-flex ml-1 align-items-center badge-pill">Updated {{ $conversationItem -> updated_ago }}</span>
                            </span>
                        </a>
                    @endforeach
                </div>
                {{ $usersConversations -> links('includes.paginate') }}
            @else
                <div class="alert alert-warning text-center">You don't have any conversations!</div>
            @endif
        </div>
    </div>



@stop