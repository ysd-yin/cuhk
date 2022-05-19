		Route::group(['prefix' => 'student_highlight'], function () {
	        Route::get('listing', 'Admin\StudentHighlightController@listing')->name('admin.student_highlight.listing');
	        Route::get('detail/{id?}', 'Admin\StudentHighlightController@detail')->name('admin.student_highlight.detail');
	        Route::get('arrangement/{parent_id?}', 'Admin\StudentHighlightController@arrangement')->name('admin.student_highlight.arrangement');
	        Route::post('save', 'Admin\StudentHighlightController@save')->name('admin.student_highlight.save');
	        Route::post('delete', 'Admin\StudentHighlightController@delete')->name('admin.student_highlight.delete');
	        Route::post('save_arrangement', 'Admin\StudentHighlightController@save_arrangement')->name('admin.student_highlight.save_arrangement');
            Route::post('bulk_action', 'Admin\StudentHighlightController@bulkAction')->name('admin.student_highlight.bulk_action');
	    });

