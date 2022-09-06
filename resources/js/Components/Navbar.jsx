import React from "react";
import Modal from "./Modal";
import Create from '@/Pages/Post/Create'
import { Link } from "@inertiajs/inertia-react";

export default function Navbar(props) {
  return (
    <div className="navbar bg-base-100">
      <div className="navbar-start">
        <a className="btn btn-ghost normal-case text-xl">interior_app</a>
      </div>
      <div className="navbar-center">
        <div className="form-control">
          <input type="text" placeholder="Search" className="input input-bordered" />
        </div>
      </div>
      <div className="navbar-end">
        {
          props.auth.user && 
            (
              <Modal btntxt='post' modal_id="post_modal">
                <Create modal_id="post_modal"/>
              </Modal>
            )
        }
        {
          props.auth.user ?
          (
            <div className="dropdown dropdown-end">
              <label tabIndex="0" className="btn btn-ghost btn-circle avatar">
                <div className="w-10 rounded-full">
                  <img src="https://api.lorem.space/image/face?hash=33791" />
                </div>
              </label>
              <ul tabIndex="0" className="mt-3 p-2 shadow menu menu-compact dropdown-content bg-base-100 rounded-box w-52">
                <li>
                  <a className="justify-between">
                    Profile
                  </a>
                </li>
                <li><a>Settings</a></li>
                <li><Link href={route('logout')} method='post' as='button'>Logout</Link></li>
              </ul>
            </div>          
          ) : 
          (
            <a className="btn btn-outline" href={route('login')}>Login</a>
          )
        }
      </div>
    </div>
  )
}