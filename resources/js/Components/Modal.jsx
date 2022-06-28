import React from "react";

export default function Modal(props) {
  return (
    <>
      <a href={"#"+props.modal_id} className="btn">{props.btntxt}</a>
      <div className="modal" id={props.modal_id}>
        <div className="modal-box">
          { props.children }
        </div>
      </div>
    </>
  )
}