<?php

class HistoriesController extends \BaseController {

	private $p_ary_rules = array(
			'history'       => 'required',
			'time'      => 'required|date_format:Y-m-d H:i:s',
			'other_edit' => 'required|numeric'
		);

    public function __construct()
    {
        $this->beforeFilter('csrf', array('on' => 'post'));
    }

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		// get all the history
		$p_obj_history = History::with('user')->paginate(15);

		// load the view and pass the history
		return View::make('history.index')
			->with('history', $p_obj_history);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		// load the create form (app/views/history/create.blade.php)
		return View::make('history.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		// validate
		// read more on validation at http://laravel.com/docs/validation
		// $rules = array(
		// 	'history'       => 'required',
		// 	'time'      => 'required|date_format:Y-m-d H:i:s',
		// 	'other_edit' => 'required|numeric'
		// );
		$validator = Validator::make(Input::all(), $this->p_ary_rules);

		// process the login
		if ($validator->fails()) {
			return Redirect::to('history/create')
				->withErrors($validator)
				->withInput(Input::except('password'));
		} else {
			// store
			$p_obj_history = new History;
			$p_obj_history->history       = Input::get('history');
			$p_obj_history->time      = Input::get('time');
			$p_obj_history->other_edit = Input::get('other_edit');
			$p_obj_history->user_id = 3;
			$p_obj_history->save();

			// redirect
			Session::flash('message', '建立成功！');
			return Redirect::to('history');
		}
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $v_int_id
	 * @return Response
	 */
	public function show($v_int_id)
	{
		// get the history
		$p_obj_history = History::find($v_int_id);	
		$p_obj_lists = $p_obj_history->lists;

		// show the view and pass the history to it
		return View::make('history.show', array('history' => $p_obj_history, 'lists' => $p_obj_lists));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $v_int_id
	 * @return Response
	 */
	public function edit($v_int_id)
	{
		// get the history
		$p_obj_history= History::find($v_int_id);

		// show the edit form and pass the history
		return View::make('history.edit')
			->with('history', $p_obj_history);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $v_int_id
	 * @return Response
	 */
	public function update($v_int_id)
	{
		// validate
		// read more on validation at http://laravel.com/docs/validation
		// $rules = array(
		// 	'name'       => 'required',
		// 	'email'      => 'required|email',
		// 	'history_level' => 'required|numeric'
		// );
		$validator = Validator::make(Input::all(), $this->p_ary_rules);

		// process the login
		if ($validator->fails()) {
			return Redirect::to('history/' . $v_int_id . '/edit')
				->withErrors($validator)
				->withInput(Input::except('password'));
		} else {
			// store
			$p_obj_history = History::find($v_int_id);
			$p_obj_history->history       = Input::get('history');
			$p_obj_history->time      = Input::get('time');
			$p_obj_history->other_edit = Input::get('other_edit');
			$p_obj_history->save();

			// redirect
			Session::flash('message', '更新成功！');
			return Redirect::to('history');
		}
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $v_int_id
	 * @return Response
	 */
	public function destroy($v_int_id)
	{
		// delete
		$p_obj_history = History::find($v_int_id);
		$p_obj_history->delete();

		// redirect
		Session::flash('message', '刪除成功！');
		return Redirect::to('history');
	}

}