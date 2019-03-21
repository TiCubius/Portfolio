<?php


Route::resource("projects", "ProjectController")->only(["index", "show"]);
Route::get("/", function(){return redirect(route("projects.index"));});
