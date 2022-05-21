<?php
use Illuminate\Routing\Router;
use Illuminate\Http\Request;
/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
|
| Here is where you can register admin routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Auth::routes();

Route::group(['prefix' => config('appcustom.admin_path')], function () {

    Route::get('/', function(){
        return redirect(route('admin.home.detail'));
    });

    Route::group(['middleware' => ['auth']], function () {
        Route::get('user', 'Admin\UserController@index')->name('admin.user');
        Route::get('home', 'Admin\HomeController@index')->name('admin.home.detail');
        Route::get('example', 'Admin\ExampleController@index')->name('admin.example.index');

        Route::group(['prefix' => 'cms_demo'], function () {
            Route::get('listing', 'Admin\CmsDemoController@listing')->name('admin.cms_demo.listing');
            Route::get('detail/{id?}', 'Admin\CmsDemoController@detail')->name('admin.cms_demo.detail');
            Route::get('arrangement/{parent_id?}', 'Admin\CmsDemoController@arrangement')->name('admin.cms_demo.arrangement');
            Route::post('save', 'Admin\CmsDemoController@save')->name('admin.cms_demo.save');
            Route::post('delete', 'Admin\CmsDemoController@delete')->name('admin.cms_demo.delete');
            Route::post('save_arrangement', 'Admin\CmsDemoController@save_arrangement')->name('admin.cms_demo.save_arrangement');
            Route::post('bulk_action', 'Admin\CmsDemoController@bulkAction')->name('admin.cms_demo.bulk_action');
        });

        Route::group(['prefix' => 'cms_demo_tag'], function () {
            Route::get('listing', 'Admin\CmsDemoTagController@listing')->name('admin.cms_demo_tag.listing');
            Route::get('detail/{id?}', 'Admin\CmsDemoTagController@detail')->name('admin.cms_demo_tag.detail');
            Route::get('arrangement/{parent_id?}', 'Admin\CmsDemoTagController@arrangement')->name('admin.cms_demo_tag.arrangement');
            Route::post('save', 'Admin\CmsDemoTagController@save')->name('admin.cms_demo_tag.save');
            Route::post('delete', 'Admin\CmsDemoTagController@delete')->name('admin.cms_demo_tag.delete');
            Route::post('save_arrangement', 'Admin\CmsDemoTagController@save_arrangement')->name('admin.cms_demo_tag.save_arrangement');
            Route::post('bulk_action', 'Admin\CmsDemoTagController@bulkAction')->name('admin.cms_demo_tag.bulk_action');
        });

        Route::group(['prefix' => 'home_page'], function () {
            Route::get('listing', 'Admin\HomePageController@listing')->name('admin.home_page.listing');
            Route::get('detail/{id?}', 'Admin\HomePageController@detail')->name('admin.home_page.detail');
            Route::get('arrangement/{parent_id?}', 'Admin\HomePageController@arrangement')->name('admin.home_page.arrangement');
            Route::post('save', 'Admin\HomePageController@save')->name('admin.home_page.save');
            Route::post('delete', 'Admin\HomePageController@delete')->name('admin.home_page.delete');
            Route::post('save_arrangement', 'Admin\HomePageController@save_arrangement')->name('admin.home_page.save_arrangement');
            Route::post('bulk_action', 'Admin\HomePageController@bulkAction')->name('admin.home_page.bulk_action');
        });

        Route::group(['prefix' => 'home_banner'], function () {
            Route::get('listing', 'Admin\HomeBannerController@listing')->name('admin.home_banner.listing');
            Route::get('detail/{id?}', 'Admin\HomeBannerController@detail')->name('admin.home_banner.detail');
            Route::get('arrangement/{parent_id?}', 'Admin\HomeBannerController@arrangement')->name('admin.home_banner.arrangement');
            Route::post('save', 'Admin\HomeBannerController@save')->name('admin.home_banner.save');
            Route::post('delete', 'Admin\HomeBannerController@delete')->name('admin.home_banner.delete');
            Route::post('save_arrangement', 'Admin\HomeBannerController@save_arrangement')->name('admin.home_banner.save_arrangement');
            Route::post('bulk_action', 'Admin\HomeBannerController@bulkAction')->name('admin.home_banner.bulk_action');
        });

        Route::group(['prefix' => 'translation'], function () {
            Route::get('listing', 'Admin\TranslationController@listing')->name('admin.translation.listing');
            Route::get('detail/{id?}', 'Admin\TranslationController@detail')->name('admin.translation.detail');
            Route::get('arrangement/{parent_id?}', 'Admin\TranslationController@arrangement')->name('admin.translation.arrangement');
            Route::post('save', 'Admin\TranslationController@save')->name('admin.translation.save');
            Route::post('delete', 'Admin\TranslationController@delete')->name('admin.translation.delete');
            Route::post('save_arrangement', 'Admin\TranslationController@save_arrangement')->name('admin.translation.save_arrangement');
            Route::post('bulk_action', 'Admin\TranslationController@bulkAction')->name('admin.translation.bulk_action');
        });

        Route::group(['prefix' => 'media'], function () {
            Route::post('upload', 'Admin\MediaController@upload')->name('admin.media.upload');
            Route::get('medias_in_folder/{folder_id?}', 'Admin\MediaController@medias_in_folder')->name('admin.media.medias_in_folder');
            Route::post('create_folder', 'Admin\MediaController@create_folder')->name('admin.media.create_folder');
            Route::post('rename_folder', 'Admin\MediaController@rename_folder')->name('admin.media.rename_folder');
            Route::post('move_folder', 'Admin\MediaController@move_folder')->name('admin.media.move_folder');
            Route::post('delete_folder', 'Admin\MediaController@delete_folder')->name('admin.media.delete_folder');
            Route::post('move', 'Admin\MediaController@move')->name('admin.media.move');
            Route::post('edit', 'Admin\MediaController@edit')->name('admin.media.edit');
            Route::post('delete', 'Admin\MediaController@delete')->name('admin.media.delete');
            Route::get('search', 'Admin\MediaController@search')->name('admin.media.search');
        });

        Route::group(['prefix' => 'user'], function () {
            Route::get('listing', 'Admin\UserController@listing')->name('admin.user.listing');
            Route::get('detail/{id?}', 'Admin\UserController@detail')->name('admin.user.detail');
            Route::get('arrangement/{parent_id?}', 'Admin\UserController@arrangement')->name('admin.user.arrangement');
            Route::post('save', 'Admin\UserController@save')->name('admin.user.save');
            Route::post('delete', 'Admin\UserController@delete')->name('admin.user.delete');
            Route::post('save_arrangement', 'Admin\UserController@save_arrangement')->name('admin.user.save_arrangement');
            Route::post('bulk_action', 'Admin\UserController@bulkAction')->name('admin.user.bulk_action');
        });

        Route::group(['prefix' => 'role'], function () {
            Route::get('listing', 'Admin\RoleController@listing')->name('admin.role.listing');
            Route::get('detail/{id?}', 'Admin\RoleController@detail')->name('admin.role.detail');
            Route::get('arrangement/{parent_id?}', 'Admin\RoleController@arrangement')->name('admin.role.arrangement');
            Route::post('save', 'Admin\RoleController@save')->name('admin.role.save');
            Route::post('delete', 'Admin\RoleController@delete')->name('admin.role.delete');
            Route::post('save_arrangement', 'Admin\RoleController@save_arrangement')->name('admin.role.save_arrangement');
            Route::post('bulk_action', 'Admin\RoleController@bulkAction')->name('admin.role.bulk_action');
        });

        Route::group(['prefix' => 'system_setting'], function () {
            Route::get('listing', 'Admin\SystemSettingController@listing')->name('admin.system_setting.listing');
            Route::get('detail/{id?}', 'Admin\SystemSettingController@detail')->name('admin.system_setting.detail');
            Route::get('arrangement/{parent_id?}', 'Admin\SystemSettingController@arrangement')->name('admin.system_setting.arrangement');
            Route::post('save', 'Admin\SystemSettingController@save')->name('admin.system_setting.save');
            Route::post('delete', 'Admin\SystemSettingController@delete')->name('admin.system_setting.delete');
            Route::post('save_arrangement', 'Admin\SystemSettingController@save_arrangement')->name('admin.system_setting.save_arrangement');
            Route::post('bulk_action', 'Admin\SystemSettingController@bulkAction')->name('admin.system_setting.bulk_action');
        });

        Route::group(['prefix' => 'media_library'], function () {
            Route::get('/', 'Admin\MediaLibraryController@index')->name('admin.media_library.index');
        });

        Route::group(['prefix' => 'about_message'], function () {
	        Route::get('listing', 'Admin\AboutMessageController@listing')->name('admin.about_message.listing');
	        Route::get('detail/{id?}', 'Admin\AboutMessageController@detail')->name('admin.about_message.detail');
	        Route::get('arrangement/{parent_id?}', 'Admin\AboutMessageController@arrangement')->name('admin.about_message.arrangement');
	        Route::post('save', 'Admin\AboutMessageController@save')->name('admin.about_message.save');
	        Route::post('delete', 'Admin\AboutMessageController@delete')->name('admin.about_message.delete');
	        Route::post('save_arrangement', 'Admin\AboutMessageController@save_arrangement')->name('admin.about_message.save_arrangement');
            Route::post('bulk_action', 'Admin\AboutMessageController@bulkAction')->name('admin.about_message.bulk_action');
	    });

		Route::group(['prefix' => 'about_overview'], function () {
	        Route::get('listing', 'Admin\AboutOverviewController@listing')->name('admin.about_overview.listing');
	        Route::get('detail/{id?}', 'Admin\AboutOverviewController@detail')->name('admin.about_overview.detail');
	        Route::get('arrangement/{parent_id?}', 'Admin\AboutOverviewController@arrangement')->name('admin.about_overview.arrangement');
	        Route::post('save', 'Admin\AboutOverviewController@save')->name('admin.about_overview.save');
	        Route::post('delete', 'Admin\AboutOverviewController@delete')->name('admin.about_overview.delete');
	        Route::post('save_arrangement', 'Admin\AboutOverviewController@save_arrangement')->name('admin.about_overview.save_arrangement');
            Route::post('bulk_action', 'Admin\AboutOverviewController@bulkAction')->name('admin.about_overview.bulk_action');
	    });

		Route::group(['prefix' => 'about_management'], function () {
	        Route::get('listing', 'Admin\AboutManagementController@listing')->name('admin.about_management.listing');
	        Route::get('detail/{id?}', 'Admin\AboutManagementController@detail')->name('admin.about_management.detail');
	        Route::get('arrangement/{parent_id?}', 'Admin\AboutManagementController@arrangement')->name('admin.about_management.arrangement');
	        Route::post('save', 'Admin\AboutManagementController@save')->name('admin.about_management.save');
	        Route::post('delete', 'Admin\AboutManagementController@delete')->name('admin.about_management.delete');
	        Route::post('save_arrangement', 'Admin\AboutManagementController@save_arrangement')->name('admin.about_management.save_arrangement');
            Route::post('bulk_action', 'Admin\AboutManagementController@bulkAction')->name('admin.about_management.bulk_action');
	    });

		Route::group(['prefix' => 'about_faculty'], function () {
	        Route::get('listing', 'Admin\AboutFacultyController@listing')->name('admin.about_faculty.listing');
	        Route::get('detail/{id?}', 'Admin\AboutFacultyController@detail')->name('admin.about_faculty.detail');
	        Route::get('arrangement/{parent_id?}', 'Admin\AboutFacultyController@arrangement')->name('admin.about_faculty.arrangement');
	        Route::post('save', 'Admin\AboutFacultyController@save')->name('admin.about_faculty.save');
	        Route::post('delete', 'Admin\AboutFacultyController@delete')->name('admin.about_faculty.delete');
	        Route::post('save_arrangement', 'Admin\AboutFacultyController@save_arrangement')->name('admin.about_faculty.save_arrangement');
            Route::post('bulk_action', 'Admin\AboutFacultyController@bulkAction')->name('admin.about_faculty.bulk_action');
	    });

		Route::group(['prefix' => 'about_learning'], function () {
	        Route::get('listing', 'Admin\AboutLearningController@listing')->name('admin.about_learning.listing');
	        Route::get('detail/{id?}', 'Admin\AboutLearningController@detail')->name('admin.about_learning.detail');
	        Route::get('arrangement/{parent_id?}', 'Admin\AboutLearningController@arrangement')->name('admin.about_learning.arrangement');
	        Route::post('save', 'Admin\AboutLearningController@save')->name('admin.about_learning.save');
	        Route::post('delete', 'Admin\AboutLearningController@delete')->name('admin.about_learning.delete');
	        Route::post('save_arrangement', 'Admin\AboutLearningController@save_arrangement')->name('admin.about_learning.save_arrangement');
            Route::post('bulk_action', 'Admin\AboutLearningController@bulkAction')->name('admin.about_learning.bulk_action');
	    });

		Route::group(['prefix' => 'about_news'], function () {
	        Route::get('listing', 'Admin\AboutNewsController@listing')->name('admin.about_news.listing');
	        Route::get('detail/{id?}', 'Admin\AboutNewsController@detail')->name('admin.about_news.detail');
	        Route::get('arrangement/{parent_id?}', 'Admin\AboutNewsController@arrangement')->name('admin.about_news.arrangement');
	        Route::post('save', 'Admin\AboutNewsController@save')->name('admin.about_news.save');
	        Route::post('delete', 'Admin\AboutNewsController@delete')->name('admin.about_news.delete');
	        Route::post('save_arrangement', 'Admin\AboutNewsController@save_arrangement')->name('admin.about_news.save_arrangement');
            Route::post('bulk_action', 'Admin\AboutNewsController@bulkAction')->name('admin.about_news.bulk_action');
	    });

		Route::group(['prefix' => 'about_contact'], function () {
	        Route::get('listing', 'Admin\AboutContactController@listing')->name('admin.about_contact.listing');
	        Route::get('detail/{id?}', 'Admin\AboutContactController@detail')->name('admin.about_contact.detail');
	        Route::get('arrangement/{parent_id?}', 'Admin\AboutContactController@arrangement')->name('admin.about_contact.arrangement');
	        Route::post('save', 'Admin\AboutContactController@save')->name('admin.about_contact.save');
	        Route::post('delete', 'Admin\AboutContactController@delete')->name('admin.about_contact.delete');
	        Route::post('save_arrangement', 'Admin\AboutContactController@save_arrangement')->name('admin.about_contact.save_arrangement');
            Route::post('bulk_action', 'Admin\AboutContactController@bulkAction')->name('admin.about_contact.bulk_action');
	    });

        Route::group(['prefix' => 'curriculum_structure'], function () {
	        Route::get('listing', 'Admin\CurriculumStructureController@listing')->name('admin.curriculum_structure.listing');
	        Route::get('detail/{id?}', 'Admin\CurriculumStructureController@detail')->name('admin.curriculum_structure.detail');
	        Route::get('arrangement/{parent_id?}', 'Admin\CurriculumStructureController@arrangement')->name('admin.curriculum_structure.arrangement');
	        Route::post('save', 'Admin\CurriculumStructureController@save')->name('admin.curriculum_structure.save');
	        Route::post('delete', 'Admin\CurriculumStructureController@delete')->name('admin.curriculum_structure.delete');
	        Route::post('save_arrangement', 'Admin\CurriculumStructureController@save_arrangement')->name('admin.curriculum_structure.save_arrangement');
            Route::post('bulk_action', 'Admin\CurriculumStructureController@bulkAction')->name('admin.curriculum_structure.bulk_action');
	    });

		Route::group(['prefix' => 'curriculum_sequence'], function () {
	        Route::get('listing', 'Admin\CurriculumSequenceController@listing')->name('admin.curriculum_sequence.listing');
	        Route::get('detail/{id?}', 'Admin\CurriculumSequenceController@detail')->name('admin.curriculum_sequence.detail');
	        Route::get('arrangement/{parent_id?}', 'Admin\CurriculumSequenceController@arrangement')->name('admin.curriculum_sequence.arrangement');
	        Route::post('save', 'Admin\CurriculumSequenceController@save')->name('admin.curriculum_sequence.save');
	        Route::post('delete', 'Admin\CurriculumSequenceController@delete')->name('admin.curriculum_sequence.delete');
	        Route::post('save_arrangement', 'Admin\CurriculumSequenceController@save_arrangement')->name('admin.curriculum_sequence.save_arrangement');
            Route::post('bulk_action', 'Admin\CurriculumSequenceController@bulkAction')->name('admin.curriculum_sequence.bulk_action');
	    });

		Route::group(['prefix' => 'student_development'], function () {
	        Route::get('listing', 'Admin\StudentDevelopmentController@listing')->name('admin.student_development.listing');
	        Route::get('detail/{id?}', 'Admin\StudentDevelopmentController@detail')->name('admin.student_development.detail');
	        Route::get('arrangement/{parent_id?}', 'Admin\StudentDevelopmentController@arrangement')->name('admin.student_development.arrangement');
	        Route::post('save', 'Admin\StudentDevelopmentController@save')->name('admin.student_development.save');
	        Route::post('delete', 'Admin\StudentDevelopmentController@delete')->name('admin.student_development.delete');
	        Route::post('save_arrangement', 'Admin\StudentDevelopmentController@save_arrangement')->name('admin.student_development.save_arrangement');
            Route::post('bulk_action', 'Admin\StudentDevelopmentController@bulkAction')->name('admin.student_development.bulk_action');
	    });

		Route::group(['prefix' => 'student_achievement'], function () {
	        Route::get('listing', 'Admin\StudentAchievementController@listing')->name('admin.student_achievement.listing');
	        Route::get('detail/{id?}', 'Admin\StudentAchievementController@detail')->name('admin.student_achievement.detail');
	        Route::get('arrangement/{parent_id?}', 'Admin\StudentAchievementController@arrangement')->name('admin.student_achievement.arrangement');
	        Route::post('save', 'Admin\StudentAchievementController@save')->name('admin.student_achievement.save');
	        Route::post('delete', 'Admin\StudentAchievementController@delete')->name('admin.student_achievement.delete');
	        Route::post('save_arrangement', 'Admin\StudentAchievementController@save_arrangement')->name('admin.student_achievement.save_arrangement');
            Route::post('bulk_action', 'Admin\StudentAchievementController@bulkAction')->name('admin.student_achievement.bulk_action');
	    });

		Route::group(['prefix' => 'student_voices'], function () {
	        Route::get('listing', 'Admin\StudentVoicesController@listing')->name('admin.student_voices.listing');
	        Route::get('detail/{id?}', 'Admin\StudentVoicesController@detail')->name('admin.student_voices.detail');
	        Route::get('arrangement/{parent_id?}', 'Admin\StudentVoicesController@arrangement')->name('admin.student_voices.arrangement');
	        Route::post('save', 'Admin\StudentVoicesController@save')->name('admin.student_voices.save');
	        Route::post('delete', 'Admin\StudentVoicesController@delete')->name('admin.student_voices.delete');
	        Route::post('save_arrangement', 'Admin\StudentVoicesController@save_arrangement')->name('admin.student_voices.save_arrangement');
            Route::post('bulk_action', 'Admin\StudentVoicesController@bulkAction')->name('admin.student_voices.bulk_action');
	    });

		Route::group(['prefix' => 'career_prospetcs'], function () {
	        Route::get('listing', 'Admin\CareerProspetcsController@listing')->name('admin.career_prospetcs.listing');
	        Route::get('detail/{id?}', 'Admin\CareerProspetcsController@detail')->name('admin.career_prospetcs.detail');
	        Route::get('arrangement/{parent_id?}', 'Admin\CareerProspetcsController@arrangement')->name('admin.career_prospetcs.arrangement');
	        Route::post('save', 'Admin\CareerProspetcsController@save')->name('admin.career_prospetcs.save');
	        Route::post('delete', 'Admin\CareerProspetcsController@delete')->name('admin.career_prospetcs.delete');
	        Route::post('save_arrangement', 'Admin\CareerProspetcsController@save_arrangement')->name('admin.career_prospetcs.save_arrangement');
            Route::post('bulk_action', 'Admin\CareerProspetcsController@bulkAction')->name('admin.career_prospetcs.bulk_action');
	    });

		Route::group(['prefix' => 'admissions'], function () {
	        Route::get('listing', 'Admin\AdmissionsController@listing')->name('admin.admissions.listing');
	        Route::get('detail/{id?}', 'Admin\AdmissionsController@detail')->name('admin.admissions.detail');
	        Route::get('arrangement/{parent_id?}', 'Admin\AdmissionsController@arrangement')->name('admin.admissions.arrangement');
	        Route::post('save', 'Admin\AdmissionsController@save')->name('admin.admissions.save');
	        Route::post('delete', 'Admin\AdmissionsController@delete')->name('admin.admissions.delete');
	        Route::post('save_arrangement', 'Admin\AdmissionsController@save_arrangement')->name('admin.admissions.save_arrangement');
            Route::post('bulk_action', 'Admin\AdmissionsController@bulkAction')->name('admin.admissions.bulk_action');
	    });

        Route::group(['prefix' => 'admissions_programme'], function () {
	        Route::get('listing', 'Admin\AdmissionsProgrammeController@listing')->name('admin.admissions_programme.listing');
	        Route::get('detail/{id?}', 'Admin\AdmissionsProgrammeController@detail')->name('admin.admissions_programme.detail');
	        Route::get('arrangement/{parent_id?}', 'Admin\AdmissionsProgrammeController@arrangement')->name('admin.admissions_programme.arrangement');
	        Route::post('save', 'Admin\AdmissionsProgrammeController@save')->name('admin.admissions_programme.save');
	        Route::post('delete', 'Admin\AdmissionsProgrammeController@delete')->name('admin.admissions_programme.delete');
	        Route::post('save_arrangement', 'Admin\AdmissionsProgrammeController@save_arrangement')->name('admin.admissions_programme.save_arrangement');
            Route::post('bulk_action', 'Admin\AdmissionsProgrammeController@bulkAction')->name('admin.admissions_programme.bulk_action');
	    });

		Route::group(['prefix' => 'admissions_tuition'], function () {
	        Route::get('listing', 'Admin\AdmissionsTuitionController@listing')->name('admin.admissions_tuition.listing');
	        Route::get('detail/{id?}', 'Admin\AdmissionsTuitionController@detail')->name('admin.admissions_tuition.detail');
	        Route::get('arrangement/{parent_id?}', 'Admin\AdmissionsTuitionController@arrangement')->name('admin.admissions_tuition.arrangement');
	        Route::post('save', 'Admin\AdmissionsTuitionController@save')->name('admin.admissions_tuition.save');
	        Route::post('delete', 'Admin\AdmissionsTuitionController@delete')->name('admin.admissions_tuition.delete');
	        Route::post('save_arrangement', 'Admin\AdmissionsTuitionController@save_arrangement')->name('admin.admissions_tuition.save_arrangement');
            Route::post('bulk_action', 'Admin\AdmissionsTuitionController@bulkAction')->name('admin.admissions_tuition.bulk_action');
	    });

		Route::group(['prefix' => 'admissions_faq'], function () {
	        Route::get('listing', 'Admin\AdmissionsFaqController@listing')->name('admin.admissions_faq.listing');
	        Route::get('detail/{id?}', 'Admin\AdmissionsFaqController@detail')->name('admin.admissions_faq.detail');
	        Route::get('arrangement/{parent_id?}', 'Admin\AdmissionsFaqController@arrangement')->name('admin.admissions_faq.arrangement');
	        Route::post('save', 'Admin\AdmissionsFaqController@save')->name('admin.admissions_faq.save');
	        Route::post('delete', 'Admin\AdmissionsFaqController@delete')->name('admin.admissions_faq.delete');
	        Route::post('save_arrangement', 'Admin\AdmissionsFaqController@save_arrangement')->name('admin.admissions_faq.save_arrangement');
            Route::post('bulk_action', 'Admin\AdmissionsFaqController@bulkAction')->name('admin.admissions_faq.bulk_action');
	    });

        Route::group(['prefix' => 'about'], function () {
	        Route::get('listing', 'Admin\AboutController@listing')->name('admin.about.listing');
	        Route::get('detail/{id?}', 'Admin\AboutController@detail')->name('admin.about.detail');
	        Route::get('arrangement/{parent_id?}', 'Admin\AboutController@arrangement')->name('admin.about.arrangement');
	        Route::post('save', 'Admin\AboutController@save')->name('admin.about.save');
	        Route::post('delete', 'Admin\AboutController@delete')->name('admin.about.delete');
	        Route::post('save_arrangement', 'Admin\AboutController@save_arrangement')->name('admin.about.save_arrangement');
            Route::post('bulk_action', 'Admin\AboutController@bulkAction')->name('admin.about.bulk_action');
	    });

		Route::group(['prefix' => 'about_news_event'], function () {
	        Route::get('listing', 'Admin\AboutNewsEventController@listing')->name('admin.about_news_event.listing');
	        Route::get('detail/{id?}', 'Admin\AboutNewsEventController@detail')->name('admin.about_news_event.detail');
	        Route::get('arrangement/{parent_id?}', 'Admin\AboutNewsEventController@arrangement')->name('admin.about_news_event.arrangement');
	        Route::post('save', 'Admin\AboutNewsEventController@save')->name('admin.about_news_event.save');
	        Route::post('delete', 'Admin\AboutNewsEventController@delete')->name('admin.about_news_event.delete');
	        Route::post('save_arrangement', 'Admin\AboutNewsEventController@save_arrangement')->name('admin.about_news_event.save_arrangement');
            Route::post('bulk_action', 'Admin\AboutNewsEventController@bulkAction')->name('admin.about_news_event.bulk_action');
	    });

		Route::group(['prefix' => 'year_1'], function () {
	        Route::get('listing', 'Admin\Year1Controller@listing')->name('admin.year_1.listing');
	        Route::get('detail/{id?}', 'Admin\Year1Controller@detail')->name('admin.year_1.detail');
	        Route::get('arrangement/{parent_id?}', 'Admin\Year1Controller@arrangement')->name('admin.year_1.arrangement');
	        Route::post('save', 'Admin\Year1Controller@save')->name('admin.year_1.save');
	        Route::post('delete', 'Admin\Year1Controller@delete')->name('admin.year_1.delete');
	        Route::post('save_arrangement', 'Admin\Year1Controller@save_arrangement')->name('admin.year_1.save_arrangement');
            Route::post('bulk_action', 'Admin\Year1Controller@bulkAction')->name('admin.year_1.bulk_action');
	    });

		Route::group(['prefix' => 'year_2'], function () {
	        Route::get('listing', 'Admin\Year2Controller@listing')->name('admin.year_2.listing');
	        Route::get('detail/{id?}', 'Admin\Year2Controller@detail')->name('admin.year_2.detail');
	        Route::get('arrangement/{parent_id?}', 'Admin\Year2Controller@arrangement')->name('admin.year_2.arrangement');
	        Route::post('save', 'Admin\Year2Controller@save')->name('admin.year_2.save');
	        Route::post('delete', 'Admin\Year2Controller@delete')->name('admin.year_2.delete');
	        Route::post('save_arrangement', 'Admin\Year2Controller@save_arrangement')->name('admin.year_2.save_arrangement');
            Route::post('bulk_action', 'Admin\Year2Controller@bulkAction')->name('admin.year_2.bulk_action');
	    });

		Route::group(['prefix' => 'year_3'], function () {
	        Route::get('listing', 'Admin\Year3Controller@listing')->name('admin.year_3.listing');
	        Route::get('detail/{id?}', 'Admin\Year3Controller@detail')->name('admin.year_3.detail');
	        Route::get('arrangement/{parent_id?}', 'Admin\Year3Controller@arrangement')->name('admin.year_3.arrangement');
	        Route::post('save', 'Admin\Year3Controller@save')->name('admin.year_3.save');
	        Route::post('delete', 'Admin\Year3Controller@delete')->name('admin.year_3.delete');
	        Route::post('save_arrangement', 'Admin\Year3Controller@save_arrangement')->name('admin.year_3.save_arrangement');
            Route::post('bulk_action', 'Admin\Year3Controller@bulkAction')->name('admin.year_3.bulk_action');
	    });

		Route::group(['prefix' => 'year_4'], function () {
	        Route::get('listing', 'Admin\Year4Controller@listing')->name('admin.year_4.listing');
	        Route::get('detail/{id?}', 'Admin\Year4Controller@detail')->name('admin.year_4.detail');
	        Route::get('arrangement/{parent_id?}', 'Admin\Year4Controller@arrangement')->name('admin.year_4.arrangement');
	        Route::post('save', 'Admin\Year4Controller@save')->name('admin.year_4.save');
	        Route::post('delete', 'Admin\Year4Controller@delete')->name('admin.year_4.delete');
	        Route::post('save_arrangement', 'Admin\Year4Controller@save_arrangement')->name('admin.year_4.save_arrangement');
            Route::post('bulk_action', 'Admin\Year4Controller@bulkAction')->name('admin.year_4.bulk_action');
	    });

		Route::group(['prefix' => 'year_5'], function () {
	        Route::get('listing', 'Admin\Year5Controller@listing')->name('admin.year_5.listing');
	        Route::get('detail/{id?}', 'Admin\Year5Controller@detail')->name('admin.year_5.detail');
	        Route::get('arrangement/{parent_id?}', 'Admin\Year5Controller@arrangement')->name('admin.year_5.arrangement');
	        Route::post('save', 'Admin\Year5Controller@save')->name('admin.year_5.save');
	        Route::post('delete', 'Admin\Year5Controller@delete')->name('admin.year_5.delete');
	        Route::post('save_arrangement', 'Admin\Year5Controller@save_arrangement')->name('admin.year_5.save_arrangement');
            Route::post('bulk_action', 'Admin\Year5Controller@bulkAction')->name('admin.year_5.bulk_action');
	    });

		Route::group(['prefix' => 'curriculum_year_1'], function () {
	        Route::get('listing', 'Admin\CurriculumYear1Controller@listing')->name('admin.curriculum_year_1.listing');
	        Route::get('detail/{id?}', 'Admin\CurriculumYear1Controller@detail')->name('admin.curriculum_year_1.detail');
	        Route::get('arrangement/{parent_id?}', 'Admin\CurriculumYear1Controller@arrangement')->name('admin.curriculum_year_1.arrangement');
	        Route::post('save', 'Admin\CurriculumYear1Controller@save')->name('admin.curriculum_year_1.save');
	        Route::post('delete', 'Admin\CurriculumYear1Controller@delete')->name('admin.curriculum_year_1.delete');
	        Route::post('save_arrangement', 'Admin\CurriculumYear1Controller@save_arrangement')->name('admin.curriculum_year_1.save_arrangement');
            Route::post('bulk_action', 'Admin\CurriculumYear1Controller@bulkAction')->name('admin.curriculum_year_1.bulk_action');
	    });

		Route::group(['prefix' => 'curriculum_year_2'], function () {
	        Route::get('listing', 'Admin\CurriculumYear2Controller@listing')->name('admin.curriculum_year_2.listing');
	        Route::get('detail/{id?}', 'Admin\CurriculumYear2Controller@detail')->name('admin.curriculum_year_2.detail');
	        Route::get('arrangement/{parent_id?}', 'Admin\CurriculumYear2Controller@arrangement')->name('admin.curriculum_year_2.arrangement');
	        Route::post('save', 'Admin\CurriculumYear2Controller@save')->name('admin.curriculum_year_2.save');
	        Route::post('delete', 'Admin\CurriculumYear2Controller@delete')->name('admin.curriculum_year_2.delete');
	        Route::post('save_arrangement', 'Admin\CurriculumYear2Controller@save_arrangement')->name('admin.curriculum_year_2.save_arrangement');
            Route::post('bulk_action', 'Admin\CurriculumYear2Controller@bulkAction')->name('admin.curriculum_year_2.bulk_action');
	    });

		Route::group(['prefix' => 'curriculum_year_3'], function () {
	        Route::get('listing', 'Admin\CurriculumYear3Controller@listing')->name('admin.curriculum_year_3.listing');
	        Route::get('detail/{id?}', 'Admin\CurriculumYear3Controller@detail')->name('admin.curriculum_year_3.detail');
	        Route::get('arrangement/{parent_id?}', 'Admin\CurriculumYear3Controller@arrangement')->name('admin.curriculum_year_3.arrangement');
	        Route::post('save', 'Admin\CurriculumYear3Controller@save')->name('admin.curriculum_year_3.save');
	        Route::post('delete', 'Admin\CurriculumYear3Controller@delete')->name('admin.curriculum_year_3.delete');
	        Route::post('save_arrangement', 'Admin\CurriculumYear3Controller@save_arrangement')->name('admin.curriculum_year_3.save_arrangement');
            Route::post('bulk_action', 'Admin\CurriculumYear3Controller@bulkAction')->name('admin.curriculum_year_3.bulk_action');
	    });

		Route::group(['prefix' => 'curriculum_year_4'], function () {
	        Route::get('listing', 'Admin\CurriculumYear4Controller@listing')->name('admin.curriculum_year_4.listing');
	        Route::get('detail/{id?}', 'Admin\CurriculumYear4Controller@detail')->name('admin.curriculum_year_4.detail');
	        Route::get('arrangement/{parent_id?}', 'Admin\CurriculumYear4Controller@arrangement')->name('admin.curriculum_year_4.arrangement');
	        Route::post('save', 'Admin\CurriculumYear4Controller@save')->name('admin.curriculum_year_4.save');
	        Route::post('delete', 'Admin\CurriculumYear4Controller@delete')->name('admin.curriculum_year_4.delete');
	        Route::post('save_arrangement', 'Admin\CurriculumYear4Controller@save_arrangement')->name('admin.curriculum_year_4.save_arrangement');
            Route::post('bulk_action', 'Admin\CurriculumYear4Controller@bulkAction')->name('admin.curriculum_year_4.bulk_action');
	    });

		Route::group(['prefix' => 'curriculum_year_5'], function () {
	        Route::get('listing', 'Admin\CurriculumYear5Controller@listing')->name('admin.curriculum_year_5.listing');
	        Route::get('detail/{id?}', 'Admin\CurriculumYear5Controller@detail')->name('admin.curriculum_year_5.detail');
	        Route::get('arrangement/{parent_id?}', 'Admin\CurriculumYear5Controller@arrangement')->name('admin.curriculum_year_5.arrangement');
	        Route::post('save', 'Admin\CurriculumYear5Controller@save')->name('admin.curriculum_year_5.save');
	        Route::post('delete', 'Admin\CurriculumYear5Controller@delete')->name('admin.curriculum_year_5.delete');
	        Route::post('save_arrangement', 'Admin\CurriculumYear5Controller@save_arrangement')->name('admin.curriculum_year_5.save_arrangement');
            Route::post('bulk_action', 'Admin\CurriculumYear5Controller@bulkAction')->name('admin.curriculum_year_5.bulk_action');
	    });

		Route::group(['prefix' => 'curriculum_course_year_1'], function () {
	        Route::get('listing', 'Admin\CurriculumCourseYear1Controller@listing')->name('admin.curriculum_course_year_1.listing');
	        Route::get('detail/{id?}', 'Admin\CurriculumCourseYear1Controller@detail')->name('admin.curriculum_course_year_1.detail');
	        Route::get('arrangement/{parent_id?}', 'Admin\CurriculumCourseYear1Controller@arrangement')->name('admin.curriculum_course_year_1.arrangement');
	        Route::post('save', 'Admin\CurriculumCourseYear1Controller@save')->name('admin.curriculum_course_year_1.save');
	        Route::post('delete', 'Admin\CurriculumCourseYear1Controller@delete')->name('admin.curriculum_course_year_1.delete');
	        Route::post('save_arrangement', 'Admin\CurriculumCourseYear1Controller@save_arrangement')->name('admin.curriculum_course_year_1.save_arrangement');
            Route::post('bulk_action', 'Admin\CurriculumCourseYear1Controller@bulkAction')->name('admin.curriculum_course_year_1.bulk_action');
	    });

		Route::group(['prefix' => 'curriculum_course_year_2'], function () {
	        Route::get('listing', 'Admin\CurriculumCourseYear2Controller@listing')->name('admin.curriculum_course_year_2.listing');
	        Route::get('detail/{id?}', 'Admin\CurriculumCourseYear2Controller@detail')->name('admin.curriculum_course_year_2.detail');
	        Route::get('arrangement/{parent_id?}', 'Admin\CurriculumCourseYear2Controller@arrangement')->name('admin.curriculum_course_year_2.arrangement');
	        Route::post('save', 'Admin\CurriculumCourseYear2Controller@save')->name('admin.curriculum_course_year_2.save');
	        Route::post('delete', 'Admin\CurriculumCourseYear2Controller@delete')->name('admin.curriculum_course_year_2.delete');
	        Route::post('save_arrangement', 'Admin\CurriculumCourseYear2Controller@save_arrangement')->name('admin.curriculum_course_year_2.save_arrangement');
            Route::post('bulk_action', 'Admin\CurriculumCourseYear2Controller@bulkAction')->name('admin.curriculum_course_year_2.bulk_action');
	    });

		Route::group(['prefix' => 'curriculum_course_year_3'], function () {
	        Route::get('listing', 'Admin\CurriculumCourseYear3Controller@listing')->name('admin.curriculum_course_year_3.listing');
	        Route::get('detail/{id?}', 'Admin\CurriculumCourseYear3Controller@detail')->name('admin.curriculum_course_year_3.detail');
	        Route::get('arrangement/{parent_id?}', 'Admin\CurriculumCourseYear3Controller@arrangement')->name('admin.curriculum_course_year_3.arrangement');
	        Route::post('save', 'Admin\CurriculumCourseYear3Controller@save')->name('admin.curriculum_course_year_3.save');
	        Route::post('delete', 'Admin\CurriculumCourseYear3Controller@delete')->name('admin.curriculum_course_year_3.delete');
	        Route::post('save_arrangement', 'Admin\CurriculumCourseYear3Controller@save_arrangement')->name('admin.curriculum_course_year_3.save_arrangement');
            Route::post('bulk_action', 'Admin\CurriculumCourseYear3Controller@bulkAction')->name('admin.curriculum_course_year_3.bulk_action');
	    });

		Route::group(['prefix' => 'curriculum_course_year_4'], function () {
	        Route::get('listing', 'Admin\CurriculumCourseYear4Controller@listing')->name('admin.curriculum_course_year_4.listing');
	        Route::get('detail/{id?}', 'Admin\CurriculumCourseYear4Controller@detail')->name('admin.curriculum_course_year_4.detail');
	        Route::get('arrangement/{parent_id?}', 'Admin\CurriculumCourseYear4Controller@arrangement')->name('admin.curriculum_course_year_4.arrangement');
	        Route::post('save', 'Admin\CurriculumCourseYear4Controller@save')->name('admin.curriculum_course_year_4.save');
	        Route::post('delete', 'Admin\CurriculumCourseYear4Controller@delete')->name('admin.curriculum_course_year_4.delete');
	        Route::post('save_arrangement', 'Admin\CurriculumCourseYear4Controller@save_arrangement')->name('admin.curriculum_course_year_4.save_arrangement');
            Route::post('bulk_action', 'Admin\CurriculumCourseYear4Controller@bulkAction')->name('admin.curriculum_course_year_4.bulk_action');
	    });

		Route::group(['prefix' => 'curriculum_course_year_5'], function () {
	        Route::get('listing', 'Admin\CurriculumCourseYear5Controller@listing')->name('admin.curriculum_course_year_5.listing');
	        Route::get('detail/{id?}', 'Admin\CurriculumCourseYear5Controller@detail')->name('admin.curriculum_course_year_5.detail');
	        Route::get('arrangement/{parent_id?}', 'Admin\CurriculumCourseYear5Controller@arrangement')->name('admin.curriculum_course_year_5.arrangement');
	        Route::post('save', 'Admin\CurriculumCourseYear5Controller@save')->name('admin.curriculum_course_year_5.save');
	        Route::post('delete', 'Admin\CurriculumCourseYear5Controller@delete')->name('admin.curriculum_course_year_5.delete');
	        Route::post('save_arrangement', 'Admin\CurriculumCourseYear5Controller@save_arrangement')->name('admin.curriculum_course_year_5.save_arrangement');
            Route::post('bulk_action', 'Admin\CurriculumCourseYear5Controller@bulkAction')->name('admin.curriculum_course_year_5.bulk_action');
	    });

		Route::group(['prefix' => 'student_achievement_post'], function () {
	        Route::get('listing', 'Admin\StudentAchievementPostController@listing')->name('admin.student_achievement_post.listing');
	        Route::get('detail/{id?}', 'Admin\StudentAchievementPostController@detail')->name('admin.student_achievement_post.detail');
	        Route::get('arrangement/{parent_id?}', 'Admin\StudentAchievementPostController@arrangement')->name('admin.student_achievement_post.arrangement');
	        Route::post('save', 'Admin\StudentAchievementPostController@save')->name('admin.student_achievement_post.save');
	        Route::post('delete', 'Admin\StudentAchievementPostController@delete')->name('admin.student_achievement_post.delete');
	        Route::post('save_arrangement', 'Admin\StudentAchievementPostController@save_arrangement')->name('admin.student_achievement_post.save_arrangement');
            Route::post('bulk_action', 'Admin\StudentAchievementPostController@bulkAction')->name('admin.student_achievement_post.bulk_action');
	    });

		Route::group(['prefix' => 'student_highlight'], function () {
	        Route::get('listing', 'Admin\StudentHighlightController@listing')->name('admin.student_highlight.listing');
	        Route::get('detail/{id?}', 'Admin\StudentHighlightController@detail')->name('admin.student_highlight.detail');
	        Route::get('arrangement/{parent_id?}', 'Admin\StudentHighlightController@arrangement')->name('admin.student_highlight.arrangement');
	        Route::post('save', 'Admin\StudentHighlightController@save')->name('admin.student_highlight.save');
	        Route::post('delete', 'Admin\StudentHighlightController@delete')->name('admin.student_highlight.delete');
	        Route::post('save_arrangement', 'Admin\StudentHighlightController@save_arrangement')->name('admin.student_highlight.save_arrangement');
            Route::post('bulk_action', 'Admin\StudentHighlightController@bulkAction')->name('admin.student_highlight.bulk_action');
	    });

		Route::group(['prefix' => 'news_page'], function () {
	        Route::get('listing', 'Admin\NewsPageController@listing')->name('admin.news_page.listing');
	        Route::get('detail/{id?}', 'Admin\NewsPageController@detail')->name('admin.news_page.detail');
	        Route::get('arrangement/{parent_id?}', 'Admin\NewsPageController@arrangement')->name('admin.news_page.arrangement');
	        Route::post('save', 'Admin\NewsPageController@save')->name('admin.news_page.save');
	        Route::post('delete', 'Admin\NewsPageController@delete')->name('admin.news_page.delete');
	        Route::post('save_arrangement', 'Admin\NewsPageController@save_arrangement')->name('admin.news_page.save_arrangement');
            Route::post('bulk_action', 'Admin\NewsPageController@bulkAction')->name('admin.news_page.bulk_action');
	    });




        Route::get('2fa','Auth\PasswordSecurityController@show2faForm')->name('2fa');
        Route::post('generate2faSecret','Auth\PasswordSecurityController@generate2faSecret')->name('generate2faSecret');
        Route::post('2fa','Auth\PasswordSecurityController@enable2fa')->name('enable2fa');
        Route::post('disable2fa','Auth\PasswordSecurityController@disable2fa')->name('disable2fa');

        Route::post('2faVerify', function () {
            return redirect(URL()->previous());
        })->name('2faVerify')->middleware('2fa');

    });



    Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
    Route::post('login', 'Auth\LoginController@login');
    Route::post('logout', 'Auth\LoginController@logout')->name('logout');

    // // Registration Routes...
    // Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
    // Route::post('register', 'Auth\RegisterController@register');

    // // Password Reset Routes...
    // Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
    // Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail');
    // Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
    // Route::post('password/reset', 'Auth\ResetPasswordController@reset');

});




