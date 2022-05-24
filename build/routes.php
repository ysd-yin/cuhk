		Route::group(['prefix' => 'footer'], function () {
	        Route::get('listing', 'Admin\FooterController@listing')->name('admin.footer.listing');
	        Route::get('detail/{id?}', 'Admin\FooterController@detail')->name('admin.footer.detail');
	        Route::get('arrangement/{parent_id?}', 'Admin\FooterController@arrangement')->name('admin.footer.arrangement');
	        Route::post('save', 'Admin\FooterController@save')->name('admin.footer.save');
	        Route::post('delete', 'Admin\FooterController@delete')->name('admin.footer.delete');
	        Route::post('save_arrangement', 'Admin\FooterController@save_arrangement')->name('admin.footer.save_arrangement');
            Route::post('bulk_action', 'Admin\FooterController@bulkAction')->name('admin.footer.bulk_action');
	    });

