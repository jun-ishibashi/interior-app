import react from 'react'
import Navbar from '@/Components/Navbar'

export default function Layout( props ) {
  return (
    <>
      <Navbar {...props}/>
      <div className="flex flex-col w-full">
      </div>
      { props.children }
    </>
  )
}