		Route::group(['prefix' => 'header'], function () {
	        Route::get('listing', 'Admin\HeaderController@listing')->name('admin.header.listing');
	        Route::get('detail/{id?}', 'Admin\HeaderController@detail')->name('admin.header.detail');
	        Route::get('arrangement/{parent_id?}', 'Admin\HeaderController@arrangement')->name('admin.header.arrangement');
	        Route::post('save', 'Admin\HeaderController@save')->name('admin.header.save');
	        Route::post('delete', 'Admin\HeaderController@delete')->name('admin.header.delete');
	        Route::post('save_arrangement', 'Admin\HeaderController@save_arrangement')->name('admin.header.save_arrangement');
            Route::post('bulk_action', 'Admin\HeaderController@bulkAction')->name('admin.header.bulk_action');
	    });

