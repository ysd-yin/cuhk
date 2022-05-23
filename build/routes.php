		Route::group(['prefix' => 'student_voices_pages'], function () {
	        Route::get('listing', 'Admin\StudentVoicesPagesController@listing')->name('admin.student_voices_pages.listing');
	        Route::get('detail/{id?}', 'Admin\StudentVoicesPagesController@detail')->name('admin.student_voices_pages.detail');
	        Route::get('arrangement/{parent_id?}', 'Admin\StudentVoicesPagesController@arrangement')->name('admin.student_voices_pages.arrangement');
	        Route::post('save', 'Admin\StudentVoicesPagesController@save')->name('admin.student_voices_pages.save');
	        Route::post('delete', 'Admin\StudentVoicesPagesController@delete')->name('admin.student_voices_pages.delete');
	        Route::post('save_arrangement', 'Admin\StudentVoicesPagesController@save_arrangement')->name('admin.student_voices_pages.save_arrangement');
            Route::post('bulk_action', 'Admin\StudentVoicesPagesController@bulkAction')->name('admin.student_voices_pages.bulk_action');
	    });

