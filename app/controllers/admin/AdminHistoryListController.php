<?php

class AdminHistoryListController extends \BaseController {

	protected $list;
    public function __construct(List $list)
    {
        parent::__construct();
        $this->history = $list;
    }

	/**
	 * Display a listing of the resource.
	 * GET /adminhistories
	 *
	 * @return Response
	 */
	public function getIndex($v_int_id)
	{
        $p_obj_history = History::find($v_int_id);
        $p_obj_lists = $p_obj_history->lists()->orderBy('created_at', 'ASC')->get();

        // Title        
        $p_str_title = "事件管理";
        $p_int_historyId = $v_int_id;

        // Show the page
        return View::make('admin/histories/list/index', array('lists' =>$p_obj_lists, 'history_id' => $p_obj_history, 'title' => $p_str_title));
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /adminhistories/create
	 *
	 * @return Response
	 */
	public function getCreate()
	{

        // Title
        $title = "Add History";

        // Show the page
        return View::make('admin/histories/create_edit', compact('title'));
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /adminhistories
	 *
	 * @return Response
	 */
	public function postCreate()
	{
        // Declare the rules for the form validation
        $rules = array(
            'history'   => 'required|min:2',
            'datetimepicker'   => 'required|min:11',
        );

        // Validate the inputs
        $validator = Validator::make(Input::all(), $rules);

        // Check if the form validates with success
        if ($validator->passes())
        {
            // Create a new blog post
            $user = Auth::user();


            if(Input::get('other_edit') != 'on')
            	$p_bln_edit = false;
            else
            	$p_bln_edit = true;

            // Update the blog post data
            $this->history->history            = Input::get('history');
            // $this->history->time             = Str::slug(Input::get('title'));
            $this->history->time          = Input::get('datetimepicker');
            $this->history->other_edit          = $p_bln_edit;
            // $this->history->meta_title       = Input::get('meta-title');
            // $this->history->meta_description = Input::get('meta-description');
            // $this->history->meta_keywords    = Input::get('meta-keywords');
            $this->history->user_id          = $user->id;

            // Was the blog post created?
            if($this->history->save())
            {
                // Redirect to the new blog post page
                return Redirect::to('admin/histories/' . $this->history->id . '/edit')->with('success', "新增成功！");
            }

            // Redirect to the blog post create page
            return Redirect::to('admin/histories/create')->with('error', Lang::get('admin/histories/messages.create.error'));
        }

        // Form validation failed
        return Redirect::to('admin/histories/create')->withInput()->withErrors($validator);
	}

	/**
	 * Display the specified resource.
	 * GET /adminhistories/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /adminhistories/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function getEdit($list)
	{
        // Title
        $title = "編輯";

        // Show the page
        return View::make('admin/histories/create_edit', compact('history', 'title'));
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /adminhistories/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

    public function getDelete($list)
    {
        // Title
        $title = Lang::get('admin/histories/title.history_delete');

        // Show the page
        return View::make('admin/histories/delete', compact('history', 'title'));
    }

    public function postDelete($list)
    {
        // Declare the rules for the form validation
        $rules = array(
            'id' => 'required|integer'
        );

        // Validate the inputs
        $validator = Validator::make(Input::all(), $rules);

        // Check if the form validates with success
        if ($validator->passes())
        {
            $id = $list->id;
            $list->delete();

            // Was the blog post deleted?
            $list = History::find($id);
            if(empty($list))
            {
                // Redirect to the blog posts management page
                return Redirect::to('admin/histories')->with('success', Lang::get('admin/histories/messages.delete.success'));
            }
        }
        // There was a problem deleting the blog post
        return Redirect::to('admin/histories')->with('error', Lang::get('admin/histories/messages.delete.error'));
    }


    public function getData()
    {
        $p_obj_historiesData = History::select(array('histories.id', 'histories.history',  'histories.time', 'histories.created_at'));

        return Datatables::of($p_obj_historiesData)
        
        ->add_column('actions', '<a href="{{{ URL::to(\'admin/histories/\' . $id . \'/edit\' ) }}}" class="btn btn-default btn-xs iframe" >{{{ Lang::get(\'button.edit\') }}}</a>
                <a href="{{{ URL::to(\'admin/histories/\' . $id . \'/delete\' ) }}}" class="btn btn-xs btn-danger iframe">{{{ Lang::get(\'button.delete\') }}}</a>
            ')

        ->remove_column('id')

        ->make();
    }

}