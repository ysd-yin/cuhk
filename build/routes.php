		Route::group(['prefix' => 'student_achievement_post'], function () {
	        Route::get('listing', 'Admin\StudentAchievementPostController@listing')->name('admin.student_achievement_post.listing');
	        Route::get('detail/{id?}', 'Admin\StudentAchievementPostController@detail')->name('admin.student_achievement_post.detail');
	        Route::get('arrangement/{parent_id?}', 'Admin\StudentAchievementPostController@arrangement')->name('admin.student_achievement_post.arrangement');
	        Route::post('save', 'Admin\StudentAchievementPostController@save')->name('admin.student_achievement_post.save');
	        Route::post('delete', 'Admin\StudentAchievementPostController@delete')->name('admin.student_achievement_post.delete');
	        Route::post('save_arrangement', 'Admin\StudentAchievementPostController@save_arrangement')->name('admin.student_achievement_post.save_arrangement');
            Route::post('bulk_action', 'Admin\StudentAchievementPostController@bulkAction')->name('admin.student_achievement_post.bulk_action');
	    });

