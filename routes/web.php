<?php


Route::resource("projects", "ProjectController");
Route::get("/", function(){return redirect(route("projects.index"));});
