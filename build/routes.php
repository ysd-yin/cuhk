		Route::group(['prefix' => 'news_page'], function () {
	        Route::get('listing', 'Admin\NewsPageController@listing')->name('admin.news_page.listing');
	        Route::get('detail/{id?}', 'Admin\NewsPageController@detail')->name('admin.news_page.detail');
	        Route::get('arrangement/{parent_id?}', 'Admin\NewsPageController@arrangement')->name('admin.news_page.arrangement');
	        Route::post('save', 'Admin\NewsPageController@save')->name('admin.news_page.save');
	        Route::post('delete', 'Admin\NewsPageController@delete')->name('admin.news_page.delete');
	        Route::post('save_arrangement', 'Admin\NewsPageController@save_arrangement')->name('admin.news_page.save_arrangement');
            Route::post('bulk_action', 'Admin\NewsPageController@bulkAction')->name('admin.news_page.bulk_action');
	    });

