import React, {useEffect, useState} from 'react';
import ImageUpload from '@/Components/ImageUpload';
import ImageGallery from 'react-image-gallery';

export default function Create(props) {
  const [files, setFiles] = useState([]);
  let [step, setStep] = useState(0);
  let [fileId, setFileId] = useState(0);
  
  useEffect(() => {
    // Make sure to revoke the data uris to avoid memory leaks, will run on unmount
    return () => files.forEach(file => URL.revokeObjectURL(file.preview));
  }, []);

  const cancel = () => {
    setFiles([]);
  }

  const nextStep = (next, additional, ...args) => {
    setStep(next);
    if(additional == null) {
      return;
    }
    additional(...args);
  }

  const createPost = () => {
    setFiles([]);
    setStep(0);
  }

  const images = files.map(file => {
    return {original : file.preview, thumbnail : file.preview};
  });

  const step0 = (
    <>
      <ImageUpload files={files} setFiles={setFiles} />
      <div className='flex justify-between'>
        <a className="btn btn-outline btn-warn" href='#' onClick={() => cancel()}>cancel</a>
        <button className="btn btn-outline btn-success" onClick={() => files.length !== 0 && nextStep(step + 1, null)}>next</button>
      </div>
    </>
  );

  const step1 = (
    <>
      <ImageGallery htmlFor="my-modal" items={images} onClick={(e) => console.log(fileId)} onSlide={(id) => {setFileId(id)}} />
      <input type="checkbox" id="my-modal" class="modal-toggle" />
      <div class="modal">
        <div class="modal-box">
          <h3 class="font-bold text-lg">Congratulations random Interner user!</h3>
          <p class="py-4">You've been selected for a chance to get one year of subscription to use Wikipedia for free!</p>
          <div class="modal-action">
            <label htmlFor="my-modal" class="btn">Yay!</label>
          </div>
        </div>
      </div>
      <div className='flex justify-between'>
        <button className="btn btn-outline btn-warn" onClick={() => nextStep(step - 1, null)}>back</button>
        <button className="btn btn-outline btn-success" onClick={() => nextStep(step + 1, null)}>next</button>
      </div>
    </>
  )

  const step2 = (
    <>
      <div className='p-4'>
        <textarea id="editor" rows="8" class="textarea block px-0 w-full text-sm text-gray-800 bg-white border-0 dark:bg-gray-800 focus:ring-0 dark:text-white dark:placeholder-gray-400" placeholder="Write an article..." required></textarea> 
      </div>
      <div className='flex justify-between'>
        <button className="btn btn-outline btn-warn" onClick={() => nextStep(step - 1, null)}>back</button>
        <a className="btn btn-outline btn-success" href='#' onClick={() => createPost()}>create</a>
      </div>
    </>
  )

  return (
    <>
      {
        step === 0 ? step0 : 
        step === 1 ? step1 :
        step === 2 ? step2 : null
      }
    </>
  )
}