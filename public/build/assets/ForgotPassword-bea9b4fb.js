import{W as n,j as e,a as d}from"./app-02fc120d.js";import{G as u}from"./GuestLayout-d19173ca.js";import{T as c,I as x}from"./TextInput-3e57cf11.js";import{P as p}from"./PrimaryButton-a8e6ad95.js";import"./ApplicationLogo-a2bd3439.js";function y({status:a}){const{data:t,setData:o,post:r,processing:m,errors:l}=n({email:""}),i=s=>{s.preventDefault(),r(route("password.email"))};return e.jsxs(u,{children:[e.jsx(d,{title:"Forgot Password"}),e.jsx("div",{className:"mb-4 text-sm text-gray-600",children:"Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one."}),a&&e.jsx("div",{className:"mb-4 font-medium text-sm text-green-600",children:a}),e.jsxs("form",{onSubmit:i,children:[e.jsx(c,{id:"email",type:"email",name:"email",value:t.email,className:"mt-1 block w-full",isFocused:!0,onChange:s=>o("email",s.target.value)}),e.jsx(x,{message:l.email,className:"mt-2"}),e.jsx("div",{className:"flex items-center justify-end mt-4",children:e.jsx(p,{className:"ml-4",disabled:m,children:"Email Password Reset Link"})})]})]})}export{y as default};
