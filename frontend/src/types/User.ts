export interface User {
  id: number;
  name: string;
  phone: string;
  email?: string;
  full_name?: string;
}

export interface RegisterRequest {
  first_name: string;
  last_name: string;
  email: string;
  phone: string;
  password: string;
  password_confirmation: string;
  user_status_id?: number;
  role_ids?: number[];
}

export interface RegisterResponse {
  token: string;
  user: {
    id: number;
    name: string;
    phone: string;
  };
}
