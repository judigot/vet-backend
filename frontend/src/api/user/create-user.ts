/* Owner: App Scaffolder */
import { customFetch } from "../customFetch";
import { IUser } from "../../interfaces/interfaces";

type IBody = Omit<IUser, 'id'>;

export const createUser = async (
  formData: IBody,
): Promise<IBody | undefined> => {
  const result: IBody | undefined = await customFetch.post({
    url: `/users`,
    body: JSON.stringify(formData),
  });
  return result;
};

