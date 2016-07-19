@extends('layouts.app')

@section('title', 'Comment')
<style>
    form {
        padding-bottom: 20px;
    }

    .comment {
        padding-bottom: 20px;
    }
</style>

<script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.2.8/angular.min.js"></script>
<script src="{{ asset('js/controllers/mainCtrl.js')}}"></script>
<script src="{{ asset('js/services/commentService.js')}}"></script>
<script src="{{ asset('js/app.js')}}"></script>

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div ng-app="commentApp" ng-controller="mainController">
                    <!-- PAGE TITLE =============================================== -->
                    <div class="page-header">
                        <h2>Laravel and Angular Single Page Application</h2>
                        <h4>Commenting System</h4>
                    </div>

                    <!-- NEW COMMENT FORM =============================================== -->
                    <form ng-submit="submitComment()">
                        <!-- ng-submit will disable the default form action and use our function -->

                        <!-- AUTHOR -->
                        <div class="form-group">
                            <input type="text" class="form-control input-sm" name="author" ng-model="commentData.author"
                                   placeholder="Name">
                        </div>

                        <!-- COMMENT TEXT -->
                        <div class="form-group">
                            <input type="text" class="form-control input-lg" name="comment" ng-model="commentData.text"
                                   placeholder="Say what you have to say">
                        </div>

                        <!-- SUBMIT BUTTON -->
                        <div class="form-group text-right">
                            <button type="submit" class="btn btn-primary btn-lg">Submit</button>
                        </div>
                    </form>

                    <!-- LOADING ICON =============================================== -->
                    <!-- show loading icon if the loading variable is set to true -->
                    <p class="text-center" ng-show="loading"><span class="fa fa-meh-o fa-5x fa-spin"></span></p>

                    <!-- THE COMMENTS =============================================== -->
                    <!-- hide these comments if the loading variable is true -->
                    <div class="comment" ng-hide="loading" ng-repeat="comment in comments">
                        <h3>Comment #{{ comment.id }}
                            <small>by {{ comment.author }}</small>
                        </h3>
                        <p>{{ comment.text }}</p>

                        <p><a href="#" ng-click="deleteComment(comment.id)" class="text-muted">Delete</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

